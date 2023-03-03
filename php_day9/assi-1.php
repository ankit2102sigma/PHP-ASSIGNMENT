<!DOCTYPE html>
<html>
<head>
  <title>Upload PHP File</title>
  <style>
    label {
      display: inline-block;
      padding: 8px 12px;
      background-color: #4CAF50;
      color: white;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <h1>Upload PHP File</h1>
  <form action="" method="POST" enctype="multipart/form-data">
    <input type="file" id="php-file" name="php-file" accept=".csv" />
    <input type="submit" name="submit" value="Upload" />
  </form>

<?php

class FileUploader
{
    private $phpFile;
    private $phpFileTmp;

    public function FileUploader($phpFile, $phpFileTmp)
    {
        $this->phpFile = $phpFile;
        $this->phpFileTmp = $phpFileTmp;
    }

    public function displayTable()
    {
        echo '<table border="1">';
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
    }

    public function updateCsv($newData)
    {
        $fp = fopen($this->phpFileTmp, 'a');
        fputcsv($fp, $newData);
        fclose($fp);
    }
}

if (isset($_POST['submit'])) {
    $phpFile = $_FILES['php-file']['name'];
    var_dump($phpFile);
    $phpFileTmp = $_FILES['php-file']['tmp_name'];

    $fileUploader = new FileUploader($phpFile, $phpFileTmp);
    $fileUploader->displayTable();

    $newData = array(4, 4, 4, 'Y', 1, 1, 1, 'M', 'AddedText');
    $fileUploader->updateCsv($newData);

    $fileUploader = new FileUploader($phpFile, $phpFileTmp);
    $fileUploader->displayTable();

}
?>

</body>
</html>