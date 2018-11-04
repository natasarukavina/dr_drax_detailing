<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    try{
        $db = new PDO('sqlite:'.dirname(__FILE__).'/db/baza2.sqlite');
    } 
    catch(PDOException $e) { 
        die('Unable to open database connection'); 
    } 
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // helper functions for splitting comma separated string for old sqlite (without with statement)
    $db->sqliteCreateFunction('substr_count', 'substr_count', 2); // or createFunction if type is Sqlite3 or SQLiteDatabase
    $db->sqliteCreateFunction('explode_by_index', 'explode_by_index', 2);
    
    function explode_by_index($string, $index){
        $arr = explode(",", $string);
        return $arr[$index];
    }

    //$result = $db->query('SELECT "keywords, kv, ..." as keywords, "opizzz" as description ')->fetchAll(PDO::FETCH_ASSOC);
    //$SITE = reset($result);
    
    function remove_extra_params($sql, $in_params){
        $res = array();
        preg_match_all("/\:(\w+)/", $sql, $matches);
        foreach($matches[1] as $keyname) $res[$keyname] = $in_params[$keyname];
        return $res;
    }
    // json
    function apiJson($sqlstring, $params=array()){
        echo json_encode( api($sqlstring, $params) );
        return;
    }
    // for php
    function fetch($sqlstring, $params=array()){
        return api($sqlstring, $params);        
    }
    function api($sqlstring, $params=array()){
        global $db;
        $is_multiple = true; // $is_multiple results, not queries
        $wc = str_word_count($sqlstring,0, '1234567890:@&_');
        if ($wc==0) {
            return array();
            //echo json_encode(array()); // todo
            //return;
        }
        if ($wc==1) {
            $stmt = $db->prepare(" select sql_select, is_multiple from cms_sql where sql_name = :sql_name");
            $stmt->execute( array('sql_name' => $sqlstring) );
//            $sqlstring = $stmt->fetchColumn();    
            $respp = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if (count($respp)<1) {
                //echo json_encode(array('error'=>"query $sqlstring missing!"));
                //return;
                return array('error'=>"query $sqlstring missing!");
            }   
            $sqlstring = $respp[0]['sql_select'];
            $is_multiple = $respp[0]['is_multiple']==='false'?false:true;

            // only for superuser
            // replace `:param` with `value`
            $patterns = array_keys($params);
            foreach ($patterns as $key => $value) { $patterns[$key] = '/`:\b'.$value.'\b`/i'; }
            $replacements = array_values($params);
            foreach ($replacements as $key => $value) { $replacements[$key] = '`'.$value.'`'; }
            $sqlstring = preg_replace($patterns,$replacements,$sqlstring);            

            // replace :`param` with value
            $patterns = array_keys($params);
            foreach ($patterns as $key => $value) { $patterns[$key] = '/:`\b'.$value.'\b`/i'; }
            $replacements = array_values($params);
            $sqlstring = preg_replace($patterns,$replacements,$sqlstring);            
            //echo json_encode(array('s'=>$sqlstring)); // todo
            //return;            
        }
        $sqls = explode(';', $sqlstring);
        foreach( $sqls as $sql )
            if ( trim($sql)!=false ){
                //echo $sql;
                $stmt = $db->prepare($sql);
                $stmt->execute( remove_extra_params($sql, $params) );
                $resp = $stmt->fetchAll(PDO::FETCH_ASSOC);  
            }
        if ($is_multiple) {
//            echo json_encode(nest_array($resp)); // response only from last query if multiple
            return nest_array($resp); // response only from last query if multiple
        } else {
//            echo json_encode( count($resp)>0 ? $resp[0] : array() , JSON_FORCE_OBJECT ); // response only from last query if multiple
            return count($resp)>0 ? $resp[0] : new stdClass() ; // response only from last query if multiple
}
    }

    function fetch_twig_templates(){
        global $db;
        $data = $db->query('select name as id, template from Twig')->fetchAll(PDO::FETCH_KEY_PAIR);
        return $data;
    }
    
    function print_image($id){
        // redirect if param is absolute url
        $v1 = strpos($_SERVER['REQUEST_URI'], 'http://'); 
        $v2 = strpos($_SERVER['REQUEST_URI'], 'https://'); 
        if ( $v1!==false || $v2!==false ) {
            if ($v1!==false) {
                header('Location: ' . substr( $_SERVER['REQUEST_URI'], $v1) );
                return;
            }
            if ($v2!==false) {
                header('Location: ' . substr( $_SERVER['REQUEST_URI'], $v2) );
                return;
            }
        } 

        // else get image from DB 
        global $db;
        $stmt = $db->prepare("SELECT image_blob, mime_type from files where id = :id union all SELECT image_blob, mime_type from files where nice_url = :id limit 1");
        $stmt->execute(array('id' => $id));
        $file = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if (count($file)<1) { 
            echo 'no image';
            //http_response_code(404); 
            return;
        }
        header('Pragma: public');
        header('Cache-Control: max-age=86400');
        header('Expires: '. gmdate('D, d M Y H:i:s \G\M\T', time() + 86400));
        header('Content-type:'.$file[0]['mime_type']);
        echo $file[0]['image_blob'];
    }

    function upload2sqlite($uploaded_file){
        // [uploaded_file] => Array ( [name] => bzvz (1).jpg [type] => image/jpeg [tmp_name] => /tmp/phpvZ85y1 [error] => 0 [size] => 23814
        global $db;
        $query = $db->prepare("INSERT INTO files (image_blob, mime_type, name, nice_url, size) VALUES (:image_blob, :mime_type, :name, :nice_url, :size)");
        $query->bindValue(':image_blob', fopen($uploaded_file['tmp_name'], "rb"), PDO::PARAM_LOB);
        $query->bindParam(':mime_type',  $uploaded_file['type'], PDO::PARAM_STR);
        $query->bindParam(':name',       $uploaded_file['name'], PDO::PARAM_STR);
        $query->bindParam(':nice_url',   $uploaded_file['name'], PDO::PARAM_STR);
        $query->bindParam(':size',       $uploaded_file['size'], PDO::PARAM_INT);
        $query->execute();
        echo $db->lastInsertId(); 
    }
    /*
    function fetch($objName){
        global $db;
        $result = $db->query('SELECT * FROM Dogs order by id')->fetchAll(PDO::FETCH_ASSOC);
        return nest_array($result);
    }

    function get_single_post($id){
        global $db;
        $stmt = $db->prepare("select post.* 
        , comment.id as \"comment.id\"
        , comment.text as \"comment.text\"
        , comment.date as \"comment.date\"
        , comment.user_name as \"comment.user_name\"
        from post
        left join comment on comment.post_id = post.id
        where post.id = :id or post.nice_url = :id");
        $stmt->execute(array('id' => $id));
        $rez = $stmt->fetchAll(PDO::FETCH_ASSOC);;
        $arr = nest_array($rez);
        //print_r( $arr );
        return count($arr)==1 ? $arr[0]:null;
    }

    function fetch2($objName, $params=null){
        global $db;
        $query = '';
        if ($objName=='post')
            $query = 'select post.* 
            , comment.id as "comment.id"
            , comment.text as "comment.text"
            , comment.date as "comment.date"
            , comment.user_name as "comment.user_name"
            from post
            left join comment on comment.post_id = post.id';

        if ($objName=='dogs')
            $query = 'SELECT dogs.*, tip.tip_boja as "tip.tip_boja"
            , tip.tip_label as "tip.tip_label" 
            from dogs 
            left join tip on tip.tip_id = dogs.tip
            union all SELECT dogs.*, tip.tip_boja as "tip.tip_boja", tip.tip_label as "tip.tip_label" from dogs left join tip on tip.tip_id = dogs.tip
            order by Id';

        if ($query == ''){
            $stmt = $db->prepare("SELECT name FROM sqlite_master where type = 'table' and name = :tablename");
            $stmt->execute(array('tablename' => $objName));
            $tablename = $stmt->fetchColumn();
            
            //echo $tablename;
           // $query = "select 'table missing' as error ";
           $query = $objName;
            if ($tablename)
                $query = "select * from $tablename ";
    
        }

        $result = $db->query($query)->fetchAll(PDO::FETCH_ASSOC);
        
        //$result = $db->query('SELECT * FROM Dogs order by id')->fetchAll(PDO::FETCH_ASSOC);
        return nest_array($result);
        //return $result;
    }
*/
    function nest_array($arr){
        $any_col_has_dot_in_name = false;
        if (count($arr)>0) {
            $fieldsArr = array_keys($arr[0]);
            foreach($fieldsArr as $rk => $rv) {
                if ( strpos($rv, '.')!== false ) {
                    $any_col_has_dot_in_name = true;
                    break;
                }
            }
        }

        if (!$any_col_has_dot_in_name) return $arr; //->fetchAll(PDO::FETCH_ASSOC);

        // Nesting starts here
        $res = array(); $last_col_id = -1; 
        foreach($arr as $rowkey => $rowvalue) {

            $add_new = false;
            if ($last_col_id !== $rowvalue['id']) {
                $last_col_id = $rowvalue['id'];
                $add_new = true;
            }

            $tmp_nest_obj = array();
            $nest_key_name = '';
            $are_all_nest_values_not_null = false;
            foreach($rowvalue as $colkey => $colvalue) {
                //print_r( $rowvalue ); 
                $dot_pos = strpos($colkey, '.');
                if ($dot_pos !== false) {
                    $are_all_nest_values_not_null = $are_all_nest_values_not_null || !is_null($colvalue);
                    $tmp_nest_obj[ substr($colkey, $dot_pos+1 ) ] = $colvalue;
                    unset( $rowvalue[$colkey] );
                    $nest_key_name = substr($colkey, 0, $dot_pos);
                }
            }    

            if ($add_new) {
                $rowvalue[$nest_key_name] = array();
                if ($are_all_nest_values_not_null) $rowvalue[$nest_key_name][] = $tmp_nest_obj;
                $res[] = $rowvalue;
            }
            else {
                $res[ count($res)-1 ][$nest_key_name][] = $tmp_nest_obj;
            }
        }
        return $res;
    }
?>