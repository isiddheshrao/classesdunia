<?php
    include('class.uploader.php');
    require '../connect.php';
    require '../helper.php';

    // Session related code here
    // fetch classes username from the cookie

if(isset($_POST['classname']) && !empty($_POST['classname']))
{
  // upload successfull only on proper validation
  // as of now i am fetching class name from $class
    $class = $_POST['classname'];
    //echo $class;

    $uploader = new Uploader();
    $data = $uploader->upload($_FILES['files'], array(
        'limit' => 1, //Maximum Limit of files. {null, Number}
        'maxSize' => 10, //Maximum Size of files {null, Number(in MB's)}
        'extensions' => array('png'), //null, //Whitelist for file extension. {null, Array(ex: array('jpg', 'png'))}
        'required' => false, //Minimum one file is required for upload {Boolean}
        'uploadDir' => '../'.$class.'/', //Upload directory {String}
        'title' => $class.'_logo', //New file name {null, String, Array} *please read documentation in README.md
        'removeFiles' => true, //Enable file exclusion {Boolean(extra for jQuery.filer), String($_POST field name containing json data with file names)}
        'perms' => null, //Uploaded file permisions {null, Number}
        'onCheck' => null, //A callback function name to be called by checking a file for errors (must return an array) | ($file) | Callback
        'onError' => 'errorCallback', //A callback function name to be called if an error occured (must return an array) | ($errors, $file) | Callback
        'onSuccess' => null, //A callback function name to be called if all files were successfully uploaded | ($files, $metas) | Callback
        'onUpload' => 'onUploadCallback', //A callback function name to be called if all files were successfully uploaded (must return an array) | ($file) | Callback
        'onComplete' => null, //A callback function name to be called when upload is complete | ($file) | Callback
        'onRemove' => 'onFilesRemoveCallback' //A callback function name to be called by removing files (must return an array) | ($removed_files) | Callback
    ));

    // onFilesRemoveCallback does not work
    // echo "printing data array";
    // echo print_r($data);

    // if($data['isComplete']){
    //     $files = $data['data'];
    //     echo "inside is complete if check<br>";
    //     print_r($files);
    // }

    if($data['hasErrors']){
        $errors = $data['errors'];
        echo "printing errors array<br>";
        print_r($errors);
        //echo json_encode($errors);
    }

}
else {
  $errors = array('error' => 'Invalid arguments');
  echo json_encode($errors);
  return;
}

// functions should be outside of if and else.
// else it won't work


// function win($files, $metas)
// {
//   echo 'win function called on success<br>';
//   print_r($files);
//   print_r($metas);
// }

function onUploadCallback($file)
{
  $class = $_POST['classname'];
  echo 'inside onUploadCallback<br>';
  print_r($file);

  /*
  try {
      $conn = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $stmt = $conn->prepare('SELECT classid FROM classes WHERE cname LIKE :classname');
      $stmt->execute(array('classname' => $class));

      if($stmt->rowCount()==1)
      {
        $row = $stmt->fetch();
        $stmt = $conn->prepare('INSERT INTO `class_info` (`class_id`, `logo_url`) VALUES (:classid, :logo)');
        $res = $stmt->execute(array('classid' => $row['classid'], 'logo' => $file['name']));
        if($res==1)
        {
            echo "Insertion in class_info successfull";
        }
        else
        {
            echo "Insertion in class_info not successfull";
            return;
        }
      }
      else
      {
          echo "fetching class id results more than one classid or fetching class od did not work";
      }
    }
    catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
*/

}

function errorCallback($errors, $file)
{
  echo 'inside errorCallback<br>';
  print_r($errors);
  print_r($file);
}

// still doesn't get called
function onFilesRemoveCallback($removed_files){
  echo 'online remove files callback called';
    foreach($removed_files as $key=>$value){
        $file = '../uploads/' . $value;
        if(file_exists($file)){
            unlink($file);
        }
    }

    return $removed_files;
}

?>
