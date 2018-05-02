<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Sunra\PhpSimple\HtmlDomParser;
use App\City;
use DB;

class DataImport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'data:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command for data import. It fills database with data.';

    protected $sources = array('https://www.e-obce.sk/zoznam_vsetkych_obci.html', 
                               'https://www.e-obce.sk/zoznam_vsetkych_obci.html?strana=500',
                               'https://www.e-obce.sk/zoznam_vsetkych_obci.html?strana=1000',
                               'https://www.e-obce.sk/zoznam_vsetkych_obci.html?strana=1500',
                               'https://www.e-obce.sk/zoznam_vsetkych_obci.html?strana=2000',
                               'https://www.e-obce.sk/zoznam_vsetkych_obci.html?strana=2500');

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        DB::table('cities')->delete();

        foreach ($this->sources as $key => $source) {
            $html  = HtmlDomParser::file_get_html($source, false, null, 0);
            $table = $html->find('div[id=telo] table table tr td a');
            
            foreach ($table as $key => $value) {
                if (strpos($value->href, 'https://www.e-obce.sk/obec') !== false) {
                    $name = utf8_encode(strval($value->innertext));
                    $url = strval($value->href);

                    //console output for check data
                    $this->line($value->innertext . '--'. $value->href);

                    DB::table('cities')->insertGetId(
                        ['city' => $name, 'url' => $url]
                    );
                }
                
            }
        }
        
    }
}

