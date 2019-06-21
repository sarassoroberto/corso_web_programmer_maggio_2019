<?php
/**
 * funzione per ottenere l'occupazione in memoria di uno script
 * fonte: @see https://alexwebdevelop.com/monitor-script-memory-usage/
 * @see https://stackoverflow.com/questions/5501427/php-filesize-mb-kb-conversion/5501447
 * @return void
 */
function print_mem(): void
{
    /* Currently used memory */
    $mem_usage = memory_get_usage();

    /* Peak memory usage */
    $mem_peak = memory_get_peak_usage();

    echo "\n - now: " . round($mem_usage / (1024)) . " KB\n";
    echo " - peak: " . round($mem_peak / (1024)) . " KB\n\n";
}
/**
 */
