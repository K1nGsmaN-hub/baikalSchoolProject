<?php
    date_default_timezone_set("Asia/Irkutsk");
    require_once 'C:\\OSPanel\\vendor\\autoload.php';

    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
    use PhpOffice\PhpSpreadsheet\Style\Border;
    use PhpOffice\PhpSpreadsheet\Style\Fill;

    if (isset($_POST['buttonDownload'])) {
        $spreadsheet = new Spreadsheet();
        $borderStyleArray = array( // set border style
            'borders' => array(
                'allBorders' => array(
                    'borderStyle' => Border::BORDER_THIN,
                    'color' => array(
                        'rgb' => '808080'
                    ),
                ),
            ),
        );

        $sheet = $spreadsheet->getActiveSheet(); // current page
        $sheet->setTitle('Недельный отчет'); // set title

        $usersAll = R::getAll('SELECT first_name, sur_name, day_of_week, liftings, push_ups, run FROM `stats`, `users` WHERE users.id = stats.id_user ORDER BY `stats`.`day_of_week`', array());

        // set stats content
        $sheet->setCellValue('A1', 'Имя');
        $sheet->setCellValue('B1', 'Фамилия');
        $sheet->setCellValue('C1', 'День недели');
        $sheet->setCellValue('D1', 'Подтягивания');
        $sheet->setCellValue('E1', 'Отжимания');
        $sheet->setCellValue('F1', 'Бег в км');

        $i = 2; // iterable var
        foreach($usersAll as $usal) {
            
            $sheet->setCellValue('A'.$i, $usal['first_name']);
            $sheet->setCellValue('B'.$i, $usal['sur_name']);
            $sheet->setCellValue('C'.$i, $usal['day_of_week']);
            $sheet->setCellValue('D'.$i, $usal['liftings']);
            $sheet->setCellValue('E'.$i, $usal['push_ups']);
            $sheet->setCellValue('F'.$i, $usal['run']);
            $i++;
        }

        $statsRange = $i - 1;
        $dataLocation = $i + 2;

        $sheet->getStyle('A1:F'.$statsRange)->applyFromArray($borderStyleArray); // apply border-style to stats content

        // set data content
        $sheet->setCellValue('A'.$i, 'Дата:');
        $sheet->setCellValue('B'.$i, date('d-m-Y'));
        
        $sheet->getStyle('A'. $i .':B'.$i)->applyFromArray($borderStyleArray); // apply border-style to data content
        
        // get fill for cells range (titles)
        $sheet->getStyle('A1:F1')
                ->getFill()
                ->setFillType(Fill::FILL_SOLID)
                ->getStartColor()
                ->setRGB('ecf9fd');

        // get fill for cells range (titles)
        $sheet->getStyle('A1:F1')
                ->getFill()
                ->setFillType(Fill::FILL_SOLID)
                ->getStartColor()
                ->setRGB('91d989');

        $sheet->getStyle('A'.$i)
                ->getFill()
                ->setFillType(Fill::FILL_SOLID)
                ->getStartColor()
                ->setRGB('91d989');

        // get default column width
        $sheet->getColumnDimension('A')->setAutoSize(100);
        $sheet->getColumnDimension('B')->setAutoSize(100);
        $sheet->getColumnDimension('C')->setAutoSize(100);
        $sheet->getColumnDimension('D')->setAutoSize(100);
        $sheet->getColumnDimension('E')->setAutoSize(100);
        $sheet->getColumnDimension('F')->setAutoSize(100);

        $writer = new Xlsx($spreadsheet);
        $file = ("C:\\OSPanel\\domains\\baikalSchoolProject\\uploads\\orders\\weekly_order".date('Y-m-d').".xlsx");
        $writer->save($file);
        
        header('Content-Description: File Transfer');
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet;charset:utf-8');
        header('Content-Disposition: attachment; filename="weekly_order'.date('d-m-Y').'.xlsx"');
        header('Content-Transfer-Encoding: binary');
        header('Content-Length: ' . filesize($file));
        readfile($file);        
    }
?>