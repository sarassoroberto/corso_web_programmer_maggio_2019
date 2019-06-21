<?php
/**
 * funzione per ottenere l'occupazione in memoria di uno script
 * fonte: @see https://alexwebdevelop.com/monitor-script-memory-usage/
 * @return void
 */
function print_mem(): void
{
    /* Currently used memory */
    $mem_usage = memory_get_usage();

    /* Peak memory usage */
    $mem_peak = memory_get_peak_usage();

    echo 'The script is now using: [' . round($mem_usage / 1024) . 'KB] of memory.<br>';
    echo 'Peak usage: [' . round($mem_peak / 1024) . 'KB] of memory.\n\n';
}
