<?php

    require_once 'config.php';

    if (isset($_POST['query'])) {
        $inputText = $_POST['query'];
        $sql = "SELECT provinceName FROM foods WHERE provinceName LIKE :province";
        $stmt = $conn->prepare($sql);
        $stmt->execute(['province' => '%' . $inputText . '%' ]);
        $result = $stmt->fetchAll();

        if ($result) {
            foreach($result as $row) {
                echo '<a class="list-box list-group-item list-group-item-action border-1">' . $row['provinceName'] . '</a>';
            }
        } else {
            echo '<p class="list-box list-group-item border-1">ไม่มีข้อมูล...</p>';
        }
    }

?>