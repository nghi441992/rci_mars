<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\InvoiceZonalAlgorithm;
use App\Models\ReceiptZonalAlgorithm;
use Illuminate\Support\Facades\DB;

class ConvertDataKeyword extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'convert:keyword';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'convert kerword to json';

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
        DB::beginTransaction();
        try
        {
            $data = InvoiceZonalAlgorithm::all('*');
            foreach ($data as $row)
            {
                $arrKeyword = implode('~|',$row->keyword);
            }

        }catch (Exception $ex)
        {
            DB::rollback();
            throw new $ex;
        }

    }
}
