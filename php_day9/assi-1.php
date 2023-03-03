
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>css</title>
  <style>
       label {
      display: inline-block;
      padding: 8px 12px;
      background-color: #4CAF50;
      color: white;
      border-radius: 4px;
      cursor: pointer;
    }
    table {
      border-collapse: collapse;
      width: 100%;
      max-width: 1000px;
      margin:30px auto;
    }
    th, td {
      text-align: left;
      padding: 8px;
    }
    th {
      background-color: #4CAF50;
      color: white;
    }
    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
    h1{
      text-align:center;
    }
  </style>
</head>
<body>
  
</body>
</html>
<?php

class FileUploader
{
    private $phpFile;
    private $phpFileTmp;

    public function __construct($phpFile, $phpFileTmp)
    {
        $this->phpFile = $phpFile;
        $this->phpFileTmp = $phpFileTmp;
    }

    public function displayTable()
    {
    
      echo "<h1>"."UPDATED CSV FILE"."</h1>";
      echo '<table>';
        $start_row = 1;
        if (($csv_file = fopen($this->phpFileTmp, "r")) !== FALSE) {
            while (($read_data = fgetcsv($csv_file, 1000, ",")) !== FALSE) {
                $column_count = count($read_data);
                echo '<tr>';
                $start_row++;
                for ($c = 0; $c < $column_count; $c++) {
                    echo "<td>".$read_data[$c] . "</td>";
                }
                echo '</tr>';
            }
            fclose($csv_file);
        }
        echo '</table>';
        $this->downloadCsv();
    }

    public function updateCsv($newData)
    {
        $fp = fopen($this->phpFileTmp, 'a');
        fputcsv($fp, $newData);
        fclose($fp);
    }

    public function downloadCsv()
{

  header("Content-Description: File Transfer");
        header("Content-Type: application/octet-stream");
        header("Content-Disposition: attachment; filename=\"". $this->phpFileTmp . "\"");
        echo "File downloaded successfully";


        readfile($this->FileTemp);
        exit(); 

}
    }


if (isset($_POST['submit'])) {
    $phpFile = $_FILES['php-file']['name'];
    $phpFileTmp = $_FILES['php-file']['tmp_name'];

    $fileUploader = new FileUploader($phpFile, $phpFileTmp);
    // $fileUploader->displayTable();

    $newData = array(4, 4, 4, 'Y', 1, 1, 1, 'M', 'AddedText', 'OH');
    $fileUploader->updateCsv($newData);

    $fileUploader = new FileUploader($phpFile, $phpFileTmp);
    $fileUploader->displayTable();

    // $fileUploader->downloadCsv();
    // $fileUploader->displayTable();

}
?>

</body>
</html>