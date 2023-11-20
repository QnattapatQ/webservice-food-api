<?php

    require_once 'config.php';

    if (isset($_POST['query'])) {
        $searchValue = $_POST['query'];
        $sql = "SELECT provinceName FROM foods WHERE provinceName LIKE :province";
        $stmt = $conn->prepare($sql);
        $stmt->execute(['province' => '%' . $searchValue . '%' ]);
        $result = $stmt->fetchAll();

        if ($result) {
            foreach($result as $row) {
                echo '<a class="list-box list-group-item list-group-item-action border-1 text-light">' . $row['provinceName'] . '</a>';
            }
        } else {
            echo '<p class="list-box list-group-item border-1 text-light">ไม่มีข้อมูล...</p>';
        }
    }

?>