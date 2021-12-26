<!-- <script>
    var id_mat = localStorage.getItem("id_mat");
    var id_etd = localStorage.getItem("id_etd");
    var note_a = localStorage.getItem("note_a");
    
    // var resetValue = 0;
    // localStorage.setItem("myValue", resetValue);

 
</script> -->



<?php

    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          
        function get_data() {
            $datae = array();
            $datae[] = array(
                'id_mat' => '2',
                'id_etd' => $_POST['id_etd'],
                'note_a' => $_POST['note_a'],
            );
            return json_encode($datae);
        }
          
        $name = "notes";
        $file_name = $name . '.json';
       
        if(file_put_contents(
            "$file_name", get_data())) {
                echo $file_name .' file created';
            }
        else {
            echo 'There is some error';
        }
    }
?>
