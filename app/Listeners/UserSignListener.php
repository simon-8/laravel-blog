<?php
/*
 * 用户签名后签署PDF文件
 *
 * 已废弃
 * */
namespace App\Listeners;

use App\Events\UserSign;
use App\Jobs\StoreEsignEvi;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * @property \App\Models\Contract $contract
 *
 * */
class UserSignListener
{
    //use InteractsWithQueue;

    //public $tries = 1;

    public $contract; // 合同

    /**
     * UserSignListener constructor.
     * @throws \Exception
     */
    public function __construct()
    {

    }

    /**
     * @param UserSign $event

     * @return mixed
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException|\Exception
     */
    public function handle(UserSign $event)
    {
        \Log::info(__METHOD__);

        StoreEsignEvi::dispatch($event->contract);
    }

    /**
     * 处理失败任务。
     *
     * @param  \App\Events\UserSign  $event
     * @param  \Exception  $exception
     * @return void
     */
    //public function failed(UserSign $event, $exception)
    //{
    //    info(__METHOD__, [$exception->getMessage()]);
    //}
}
