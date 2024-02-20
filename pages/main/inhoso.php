<?php
require '../../vendor/autoload.php'; 
require'../../config/config.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if (isset($_POST['btnExport'])) {
    // Lấy id từ URL
    $id_benhnhan = mysqli_real_escape_string($mysqli, $_GET['idbn']);
    $id_ls = mysqli_real_escape_string($mysqli, $_GET['idls']);

    // Truy vấn thông tin từ cả hai bảng
    $sql = "SELECT lichsu.chandoan, lichsu.sophong, lichsu.sogiuong, lichsu.thoigian, lichsu.phuongphap,
            benhnhan.hovaten, benhnhan.cccd 
            FROM lichsu 
            INNER JOIN benhnhan ON lichsu.id_benhnhan = benhnhan.id_benhnhan 
            WHERE lichsu.id_benhnhan = '$id_benhnhan' AND lichsu.id_ls = '$id_ls'";
    $result = mysqli_query($mysqli, $sql);

    // Tạo một Spreadsheet mới
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Đặt tiêu đề cho các cột
    $sheet->setCellValue('A1', 'Họ và tên');
    $sheet->setCellValue('B1', 'CCCD/CMND');
    $sheet->setCellValue('C1', 'Chẩn đoán');
    $sheet->setCellValue('D1', 'Số phòng');
    $sheet->setCellValue('E1', 'Số giường');
    $sheet->setCellValue('F1', 'Thời gian');
    $sheet->setCellValue('G1', 'Phương pháp');

    // Điền dữ liệu từ kết quả truy vấn vào các ô tương ứng
    $rowIndex = 2;
    while ($row = mysqli_fetch_assoc($result)) {
        $sheet->setCellValue('A' . $rowIndex, $row['hovaten']);
        $sheet->setCellValue('B' . $rowIndex, $row['cccd']);
        $sheet->setCellValue('C' . $rowIndex, $row['chandoan']);
        $sheet->setCellValue('D' . $rowIndex, $row['sophong']);
        $sheet->setCellValue('E' . $rowIndex, $row['sogiuong']);
        $sheet->setCellValue('F' . $rowIndex, $row['thoigian']);
        $sheet->setCellValue('G' . $rowIndex, $row['phuongphap']);
        $rowIndex++;
    }

    // Lưu tệp Excel
    $writer = new Xlsx($spreadsheet);
    $filename = 'hoso_benhnhan_' . $id_benhnhan . '_' . $id_ls . '.xlsx';
    $filepath = '../../excel/' . $filename;
    $writer->save($filepath);

    // Trả về tệp Excel để tải xuống
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    header('Cache-Control: max-age=0');
    readfile($filepath);
    exit;
}
?>
