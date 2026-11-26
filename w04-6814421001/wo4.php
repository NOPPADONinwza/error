<?php
$pageTitle = "w04-index";

?>

<div class="flex flex-col p-4 md:p-8 max-w-4xl mx-auto">
    <h1 class="text-2xl font-bold mb-4">w04</h1>
    
    <?php
        // --- ส่วนที่ 1: โค้ดตามรูปภาพตัวอย่างของคุณเป๊ะๆ ---
        echo "User Agent " . $_SERVER["HTTP_USER_AGENT"] . "<br>";
        echo "Host " . $_SERVER["HTTP_HOST"] . "<br>";
        echo "Server Software " . $_SERVER["SERVER_SOFTWARE"] . "<br>";
        echo "Script Filename " . $_SERVER["SCRIPT_FILENAME"] . "<br>";
    ?>

    <hr class="my-6 border-gray-300">

    <h2 class="text-xl font-semibold mb-4">ข้อมูลที่ได้รับจากฟอร์ม</h2>
    
    <?php
        // --- ส่วนที่ 2: ส่วนเชื่อมข้อมูลจากฟอร์ม index.html ---
        // ตรวจสอบว่ามีการส่งข้อมูลแบบ POST มาหรือไม่
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            // รับค่าจากฟอร์ม (ใช้ Null Coalescing Operator ?? เพื่อป้องกัน Error ถ้าไม่มีการส่งมา)
            $studentName = $_POST['studentName'] ?? '-';
            $studentId   = $_POST['studentId'] ?? '-';
            $faculty     = $_POST['faculty'] ?? '-';
            $major       = $_POST['major'] ?? '-';
            $phone       = $_POST['phone'] ?? '-';
            $advisor     = $_POST['advisor'] ?? '-';
            $activityDate= $_POST['activityDate'] ?? '-';
            $startTime   = $_POST['startTime'] ?? '-';
            $endTime     = $_POST['endTime'] ?? '-';
            $duration    = $_POST['duration'] ?? '-';
            $activity1   = $_POST['activity1'] ?? '-';
            $activity2   = $_POST['activity2'] ?? '-';
            $activity3   = $_POST['activity3'] ?? '-';

            // แสดงผลข้อมูล
            echo "<ul class='list-disc pl-6 space-y-2'>";
            echo "<li><strong>ชื่อ-นามสกุล:</strong> " . htmlspecialchars($studentName) . "</li>";
            echo "<li><strong>รหัสนักศึกษา:</strong> " . htmlspecialchars($studentId) . "</li>";
            echo "<li><strong>คณะ:</strong> " . htmlspecialchars($faculty) . "</li>";
            echo "<li><strong>สาขาวิชา:</strong> " . htmlspecialchars($major) . "</li>";
            echo "<li><strong>โทรศัพท์:</strong> " . htmlspecialchars($phone) . "</li>";
            echo "<li><strong>อาจารย์ที่ปรึกษา:</strong> " . htmlspecialchars($advisor) . "</li>";
            echo "<li><strong>วันที่:</strong> " . htmlspecialchars($activityDate) . "</li>";
            echo "<li><strong>เวลา:</strong> " . htmlspecialchars($startTime) . " ถึง " . htmlspecialchars($endTime) . "</li>";
            echo "<li><strong>รวมชั่วโมง:</strong> " . htmlspecialchars($duration) . " ชั่วโมง</li>";
            echo "<li><strong>กิจกรรม 1:</strong> " . htmlspecialchars($activity1) . "</li>";
            
            // แสดงกิจกรรม 2 และ 3 ถ้ามีการกรอกข้อมูลมา
            if (!empty($activity2)) echo "<li><strong>กิจกรรม 2:</strong> " . htmlspecialchars($activity2) . "</li>";
            if (!empty($activity3)) echo "<li><strong>กิจกรรม 3:</strong> " . htmlspecialchars($activity3) . "</li>";
            
            echo "</ul>";

        } else {
            // แสดงข้อความนี้ถ้าเปิด w04.php ตรงๆ โดยไม่ได้ส่งฟอร์มมา
            echo "<p class='text-red-500'>ไม่พบข้อมูลการส่งฟอร์ม (กรุณากรอกข้อมูลจากหน้า index.html ก่อน)</p>";
        }
    ?>
    
    <div class="mt-8">
        <a href="index.html" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">กลับไปหน้าแบบฟอร์ม</a>
    </div>
</div>