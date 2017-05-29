<?php
    include('class.uploader.php');

    // Session related code here
    // fetch classes username from the cookie

if(isset($_POST['classname']) && !empty($_POST['classname']))
{
  // upload successfull only on proper validation
    $class = $_POST['classname'];
    echo $class;

    $uploader = new Uploader();
    $data = $uploader->upload($_FILES['files'], array(
        'limit' => 1, //Maximum Limit of files. {null, Number}
        'maxSize' => 10, //Maximum Size of files {null, Number(in MB's)}
        'extensions' => array('jpg', 'png'), //null, //Whitelist for file extension. {null, Array(ex: array('jpg', 'png'))}
        'required' => false, //Minimum one file is required for upload {Boolean}
        'uploadDir' => '../'.$class.'/', //Upload directory {String}
        'title' => array('name'), //New file name {null, String, Array} *please read documentation in README.md
        'removeFiles' => true, //Enable file exclusion {Boolean(extra for jQuery.filer), String($_POST field name containing json data with file names)}
        'perms' => null, //Uploaded file permisions {null, Number}
        'onCheck' => null, //A callback function name to be called by checking a file for errors (must return an array) | ($file) | Callback
        'onError' => null, //A callback function name to be called if an error occured (must return an array) | ($errors, $file) | Callback
        'onSuccess' => 'win', //A callback function name to be called if all files were successfully uploaded | ($files, $metas) | Callback
        'onUpload' => 'up', //A callback function name to be called if all files were successfully uploaded (must return an array) | ($file) | Callback
        'onComplete' => null, //A callback function name to be called when upload is complete | ($file) | Callback
        'onRemove' => 'onFilesRemoveCallback' //A callback function name to be called by removing files (must return an array) | ($removed_files) | Callback
    ));

    // echo "printing data array";
    // echo print_r($data);

    if($data['isComplete']){
        $files = $data['data'];
        echo "printing upload Completed array";
        print_r($files);
    }

    if($data['hasErrors']){
        $errors = $data['errors'];
        echo "printing errors array";
        // print_r($errors);
        echo json_encode($errors);
    }

    function onFilesRemoveCallback($removed_files){
        foreach($removed_files as $key=>$value){
            $file = '../uploads/' . $value;
            if(file_exists($file)){
                unlink($file);
            }
        }

        return $removed_files;
    }

}
else {
  $errors = array('error' => 'Invalid arguments');
  echo json_encode($errors);
  return;
}

function win($files, $metas)
{
  echo 'win function called on success';
  print_r($files);
  print_r($metas);
}

function up($file)
{
  echo 'inside up called';
}


?>
