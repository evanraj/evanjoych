<?php
/**
 * Template Name: Varadhan Template
 *
 * This is the template that displays full width page without sidebar
 *
 * 
 */

/**
 * XLS parsing uses php-excel-reader from http://code.google.com/p/php-excel-reader/
 */

    global $wpdb;
    $invoice_table              = $wpdb->prefix.'chaos_football_pricing';
    header('Content-Type: text/plain');

    // if (isset($argv[1]))
    // {
    //     $Filepath = $argv[1];
    // }
    // elseif (isset($_GET['File']))
    // {
    //     $Filepath = $_GET['File'];
    // }
    // else
    // {
    //     if (php_sapi_name() == 'cli')
    //     {
    //         echo 'Please specify filename as the first argument'.PHP_EOL;
    //     }
    //     else
    //     {
    //         echo 'Please specify filename as a HTTP GET parameter "File", e.g., "varadhan-template/?File=test.xlsx"';
    //     }
    //     exit;
    // }
    $Filepath = get_template_directory().'/chaos_table_excel.xlsx';
    // Excel reader from http://code.google.com/p/php-excel-reader/
    require get_template_directory().'/spreadsheet-reader/php-excel-reader/excel_reader2.php';
    require get_template_directory().'/spreadsheet-reader/SpreadsheetReader.php';

    date_default_timezone_set('UTC');

    $StartMem = memory_get_usage();
    echo '---------------------------------'.PHP_EOL;
    echo 'Starting memory: '.$StartMem.PHP_EOL;
    echo '---------------------------------'.PHP_EOL;

    try
    {
        $Spreadsheet = new SpreadsheetReader($Filepath);
        $BaseMem = memory_get_usage();

        $Sheets = $Spreadsheet -> Sheets();

        echo '---------------------------------'.PHP_EOL;
        echo 'Spreadsheets:'.PHP_EOL;
        print_r($Sheets);
        echo '---------------------------------'.PHP_EOL;
        echo '---------------------------------'.PHP_EOL;

        foreach ($Sheets as $Index => $Name)
        {
            echo '---------------------------------'.PHP_EOL;
            echo '*** Sheet '.$Name.' ***'.PHP_EOL;
            echo '---------------------------------'.PHP_EOL;

            $Time = microtime(true);

            $Spreadsheet -> ChangeSheet($Index);

            foreach ($Spreadsheet as $Key => $Row)
            {
                echo $Key.': ';
                if ($Row)
                {
                    print_r($Row);

                  
                    $invoice_data                           = array(
                    'name'                                  => $Row['1'],
                    'hours'                                 => $Row['2'],               
                    'session'                               => $Row['3'],                          
                    'price'                                 => $Row['4'],                                                  
                );

                    $wpdb->insert($invoice_table, $invoice_data);
                    var_dump($wpdb->last_query);
                }
               
                $CurrentMem = memory_get_usage();
        
            }
        }
        
    }
    catch (Exception $E)
    {
        echo $E -> getMessage();
    }
?>