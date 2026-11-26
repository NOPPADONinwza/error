<?php
// ตั้งค่าตัวแปรต่างๆ
$pageTitle = "w04-bio | Week01.com";
$user = "NOPPADON CHAMSAI";
$program = "Information Technology";
$myURL = "https://stu.rbru.ac.th/~s6814421001/";
$expected_grade = array(
    "Web Programming" => "A",
    "Database System" => "B+",
    "System Analysis" => "A"
);
?>
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $pageTitle; ?></title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Kanit', sans-serif; }
    [x-cloak] { display: none !important; }
  </style>
</head>
<body class="bg-gray-100 text-gray-800">

<div x-data="{ showSidebar: false }" class="relative flex w-full flex-col md:flex-row">
    <a class="sr-only" href="#main-content">skip to the main content</a>
    
    <!-- dark overlay -->
    <div x-cloak x-show="showSidebar" class="fixed inset-0 z-10 bg-neutral-950/10 backdrop-blur-xs md:hidden" aria-hidden="true" x-on:click="showSidebar = false" x-transition.opacity></div>

    <!-- ================= SIDEBAR ================= -->
    <nav x-cloak class="fixed left-0 z-20 flex h-svh w-60 shrink-0 flex-col border-r border-neutral-300 bg-neutral-50 p-4 transition-transform duration-300 md:w-64 md:translate-x-0 md:sticky md:top-0" x-bind:class="showSidebar ? 'translate-x-0' : '-translate-x-60'" aria-label="sidebar navigation">
        
        <a href="main.php" class="ml-2 w-fit text-2xl font-bold text-blue-600 flex items-center gap-2">
            <span>Week01.com</span>
        </a>

        <div class="relative my-4 flex w-full max-w-xs flex-col gap-1 text-neutral-600">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" class="absolute left-2 top-1/2 size-5 -translate-y-1/2 text-neutral-600/50" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"/>
            </svg>
            <input type="search" class="w-full border border-neutral-300 rounded-sm bg-white px-2 py-1.5 pl-9 text-sm focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600" name="search" aria-label="Search" placeholder="ค้นหา..."/>
        </div>

        <div class="flex flex-col gap-2 overflow-y-auto pb-6">
            <a href="main.php" class="flex items-center rounded-sm gap-2 px-2 py-2 text-sm font-medium text-neutral-600 hover:bg-black/5 hover:text-neutral-900">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0" aria-hidden="true"><path d="M15.5 2A1.5 1.5 0 0 0 14 3.5v13a1.5 1.5 0 0 0 1.5 1.5h1a1.5 1.5 0 0 0 1.5-1.5v-13A1.5 1.5 0 0 0 16.5 2h-1ZM9.5 6A1.5 1.5 0 0 0 8 7.5v9A1.5 1.5 0 0 0 9.5 18h1a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 10.5 6h-1ZM3.5 10A1.5 1.5 0 0 0 2 11.5v5A1.5 1.5 0 0 0 3.5 18h1A1.5 1.5 0 0 0 6 16.5v-5A1.5 1.5 0 0 0 4.5 10h-1Z"/></svg>
                <span>หน้าหลัก (Home)</span>
            </a>

            <a href="main.php#profile" class="flex items-center rounded-sm gap-2 px-2 py-2 text-sm font-medium text-neutral-600 hover:bg-black/5 hover:text-neutral-900">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0" aria-hidden="true"><path d="M10 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM3.465 14.493a1.23 1.23 0 0 0 .41 1.412A9.957 9.957 0 0 0 10 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 0 0-13.074.003Z"/></svg>
                <span>ประวัติส่วนตัว (Profile)</span>
            </a>

            <!-- Bio (Active) -->
            <a href="bio.php" class="flex items-center rounded-sm gap-2 bg-blue-600 px-2 py-2 text-sm font-medium text-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0" aria-hidden="true"><path fill-rule="evenodd" d="M10 2c-2.236 0-4.43.18-6.57.524C1.993 2.755 1 4.014 1 5.426v5.148c0 1.413.993 2.67 2.43 2.902 1.168.188 2.352.327 3.55.414.28.02.521.18.642.413l1.713 3.293a.75.75 0 0 0 1.33 0l1.713-3.293a.783.783 0 0 1 .642-.413 41.102 41.102 0 0 0 3.55-.414c1.437-.231 2.43-1.49 2.43-2.902V5.426c0-1.413-.993-2.67-2.43-2.902A41.289 41.289 0 0 0 10 2ZM6.75 6a.75.75 0 0 0 0 1.5h6.5a.75.75 0 0 0 0-1.5h-6.5Zm0 2.5a.75.75 0 0 0 0 1.5h3.5a.75.75 0 0 0 0-1.5h-3.5Z" clip-rule="evenodd"/></svg>
                <span>ประวัติการทำงาน (Bio)</span>
            </a>

            <!-- Assignment -->
            <a href="assignment.php" class="flex items-center rounded-sm gap-2 px-2 py-2 text-sm font-medium text-neutral-600 hover:bg-black/5 hover:text-neutral-900">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0" aria-hidden="true"><path fill-rule="evenodd" d="M10 2a6 6 0 0 0-6 6c0 1.887-.454 3.665-1.257 5.234a.75.75 0 0 0 .515 1.076 32.91 32.91 0 0 0 3.256.508 3.5 3.5 0 0 0 6.972 0 32.903 32.903 0 0 0 3.256-.508.75.75 0 0 0 .515-1.076A11.448 11.448 0 0 1 16 8a6 6 0 0 0-6-6ZM8.05 14.943a33.54 33.54 0 0 0 3.9 0 2 2 0 0 1-3.9 0Z" clip-rule="evenodd"/></svg>
                <span>รายการงาน (Assignment)</span>
            </a>
        </div>

        <!-- Profile Menu -->
        <div x-data="{ menuIsOpen: false }" class="mt-auto relative" x-on:keydown.esc.window="menuIsOpen = false">
            <button type="button" class="flex w-full items-center rounded-sm gap-2 p-2 text-left text-neutral-600 hover:bg-black/5 hover:text-neutral-900" x-bind:class="menuIsOpen ? 'bg-black/10' : ''" aria-haspopup="true" x-on:click="menuIsOpen = ! menuIsOpen" x-bind:aria-expanded="menuIsOpen">
                <div class="size-8 rounded-sm bg-blue-600 text-white flex items-center justify-center font-bold shrink-0">น</div>
                <div class="flex flex-col overflow-hidden">
                    <span class="text-sm font-bold text-neutral-900 truncate">นพดล แจ่มใส</span>
                    <span class="text-xs text-neutral-500 truncate">@6814421001</span>
                </div>
            </button>  
        </div>
    </nav>

    <!-- ================= MAIN CONTENT ================= -->
    <div id="main-content" class="min-h-svh w-full overflow-y-auto p-4 md:p-8 bg-gray-100 flex flex-col">
      <div class="max-w-4xl w-full mx-auto space-y-6 flex-grow">
        
        <!-- ส่วนที่ 1: ข้อมูล Bio (สวยงามด้วยการ์ดและ Grid) -->
        <section class="bg-white p-6 rounded-xl shadow-sm border border-gray-200">
          <h2 class="text-xl font-bold text-blue-600 border-b pb-3 mb-4">ข้อมูลผู้พัฒนา (Developer Bio)</h2>
          
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- ข้อมูลพื้นฐาน -->
            <div class="space-y-3">
              <div class="flex flex-col">
                <span class="text-sm text-gray-500">ชื่อ-นามสกุล</span>
                <span class="font-semibold text-lg text-gray-800"><?php echo $user; ?></span>
              </div>
              <div class="flex flex-col">
                <span class="text-sm text-gray-500">สาขาวิชา</span>
                <span class="font-medium text-gray-800"><?php echo $program; ?></span>
              </div>
              <div class="flex flex-col">
                <span class="text-sm text-gray-500">เว็บไซต์</span>
                <a href="<?php echo $myURL; ?>" target="_blank" class="text-blue-500 hover:underline break-all"><?php echo $myURL; ?></a>
              </div>
            </div>

            <!-- เกรดที่คาดหวัง -->
            <div class="bg-gray-50 rounded-lg p-4 border border-gray-200">
              <h3 class="font-semibold text-gray-800 mb-3">เกรดที่คาดหวัง (Expected Grade)</h3>
              <ul class="space-y-2">
                <?php foreach ($expected_grade as $subject => $grade): ?>
                  <li class="flex justify-between items-center text-sm border-b border-gray-200 pb-1 last:border-0">
                    <span class="text-gray-600"><?php echo $subject; ?></span>
                    <span class="font-bold text-blue-600 bg-blue-50 px-2 py-0.5 rounded"><?php echo $grade; ?></span>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
        </section>

        <!-- ส่วนที่ 2: ข้อมูลที่ได้จากฟอร์ม -->
        <section class="bg-white p-6 rounded-xl shadow-sm border border-gray-200">
          <h2 class="text-xl font-bold text-green-600 border-b pb-3 mb-4">ข้อมูลกิจกรรมที่บันทึก (Form Submission)</h2>
          
          <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
            <!-- แสดงตารางข้อมูลเมื่อมี POST -->
            <div class="overflow-x-auto">
              <table class="w-full text-sm text-left text-gray-600">
                <tbody>
                  <tr class="border-b border-gray-100 hover:bg-gray-50">
                    <th class="py-3 px-4 font-semibold bg-gray-50 w-1/3 rounded-tl-lg">ชื่อ-นามสกุล:</th>
                    <td class="py-3 px-4"><?php echo htmlspecialchars($_POST['studentName'] ?? '-'); ?></td>
                  </tr>
                  <tr class="border-b border-gray-100 hover:bg-gray-50">
                    <th class="py-3 px-4 font-semibold bg-gray-50">รหัสนักศึกษา:</th>
                    <td class="py-3 px-4"><?php echo htmlspecialchars($_POST['studentId'] ?? '-'); ?></td>
                  </tr>
                  <tr class="border-b border-gray-100 hover:bg-gray-50">
                    <th class="py-3 px-4 font-semibold bg-gray-50">คณะ:</th>
                    <td class="py-3 px-4"><?php echo htmlspecialchars($_POST['faculty'] ?? '-'); ?></td>
                  </tr>
                  <tr class="border-b border-gray-100 hover:bg-gray-50">
                    <th class="py-3 px-4 font-semibold bg-gray-50">สาขาวิชา:</th>
                    <td class="py-3 px-4"><?php echo htmlspecialchars($_POST['major'] ?? '-'); ?></td>
                  </tr>
                  <tr class="border-b border-gray-100 hover:bg-gray-50">
                    <th class="py-3 px-4 font-semibold bg-gray-50">โทรศัพท์:</th>
                    <td class="py-3 px-4"><?php echo htmlspecialchars($_POST['phone'] ?? '-'); ?></td>
                  </tr>
                  <tr class="border-b border-gray-100 hover:bg-gray-50">
                    <th class="py-3 px-4 font-semibold bg-gray-50">อาจารย์ที่ปรึกษา:</th>
                    <td class="py-3 px-4"><?php echo htmlspecialchars($_POST['advisor'] ?? '-'); ?></td>
                  </tr>
                  <tr class="border-b border-gray-100 hover:bg-gray-50">
                    <th class="py-3 px-4 font-semibold bg-gray-50">วันที่ทำกิจกรรม:</th>
                    <td class="py-3 px-4"><?php echo htmlspecialchars($_POST['activityDate'] ?? '-'); ?></td>
                  </tr>
                  <tr class="border-b border-gray-100 hover:bg-gray-50">
                    <th class="py-3 px-4 font-semibold bg-gray-50">เวลา:</th>
                    <td class="py-3 px-4">
                      <?php echo htmlspecialchars($_POST['startTime'] ?? '-'); ?> น. ถึง 
                      <?php echo htmlspecialchars($_POST['endTime'] ?? '-'); ?> น.
                    </td>
                  </tr>
                  <tr class="border-b border-gray-100 hover:bg-gray-50">
                    <th class="py-3 px-4 font-semibold bg-gray-50">รวมชั่วโมง:</th>
                    <td class="py-3 px-4 text-blue-600 font-semibold"><?php echo htmlspecialchars($_POST['duration'] ?? '-'); ?> ชั่วโมง</td>
                  </tr>
                  <tr class="border-b border-gray-100 hover:bg-gray-50">
                    <th class="py-3 px-4 font-semibold bg-gray-50 rounded-bl-lg">รายละเอียดกิจกรรม:</th>
                    <td class="py-3 px-4">
                      <div class="whitespace-pre-wrap"><?php echo htmlspecialchars($_POST['activity1'] ?? '-'); ?></div>
                      <?php if (!empty($_POST['activity2'])): ?>
                        <div class="mt-2 text-gray-500 whitespace-pre-wrap"><?php echo htmlspecialchars($_POST['activity2']); ?></div>
                      <?php endif; ?>
                      <?php if (!empty($_POST['activity3'])): ?>
                        <div class="mt-2 text-gray-500 whitespace-pre-wrap"><?php echo htmlspecialchars($_POST['activity3']); ?></div>
                      <?php endif; ?>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            
            <div class="mt-6 flex justify-end">
                <a href="index.html" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2.5 rounded-lg text-sm font-medium transition shadow-sm">
                    &larr; กลับไปหน้าฟอร์ม
                </a>
            </div>

          <?php else: ?>
            <!-- แจ้งเตือนเมื่อเปิดหน้าโดยไม่มีข้อมูลส่งมา (ใช้สไตล์ Penguin UI) -->
            <div class="w-full rounded-sm border border-amber-500 bg-white text-neutral-600" role="alert">
                <div class="flex w-full items-center gap-2 bg-amber-500/10 p-4 rounded-sm">
                    <div class="bg-amber-500/15 text-amber-600 rounded-full p-1 shrink-0" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-6" aria-hidden="true">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 1 1-16 0 8 8 0 0 1 16 0Zm-8-5a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-1.5 0v-4.5A.75.75 0 0 1 10 5Zm0 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-2">
                        <h3 class="text-sm font-semibold text-amber-600">ไม่พบข้อมูลฟอร์ม</h3>
                        <p class="text-xs font-medium sm:text-sm">คุณยังไม่ได้ทำการกรอกแบบฟอร์มหรือส่งข้อมูลมา กรุณากลับไปที่หน้าแบบฟอร์ม</p>
                    </div>
                </div>
            </div>
            <div class="mt-4 text-center">
                <a href="index.html" class="inline-block bg-amber-500 hover:bg-amber-600 text-white px-5 py-2 rounded-lg text-sm font-medium transition shadow-sm">ไปที่หน้าแบบฟอร์ม</a>
            </div>
          <?php endif; ?>

        </section>

      </div>

      <!-- Footer -->
      <footer class="mt-8 pt-4 border-t border-gray-300 text-center text-xs text-gray-500">
        <p>© 2026 Week01.com - นาย นพดล แจ่มใส | มหาวิทยาลัยราชภัฏรำไพพรรณี</p>
      </footer>
    </div>

    <!-- Toggle Button (Mobile) -->
    <button x-cloak class="fixed right-4 top-4 z-30 rounded-full bg-blue-600 p-3 md:hidden text-white shadow-lg" x-on:click="showSidebar = ! showSidebar">
        <svg x-show="showSidebar" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-5" aria-hidden="true"><path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/></svg>
        <svg x-show="! showSidebar" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-5" aria-hidden="true"><path d="M0 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm5-1v12h9a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1zM4 2H2a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h2z"/></svg>
    </button>
</div>

</body>
</html>