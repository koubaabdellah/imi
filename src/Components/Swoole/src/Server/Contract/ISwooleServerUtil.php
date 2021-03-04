<?php

declare(strict_types=1);

namespace Imi\Swoole\Server\Contract;

use Imi\Server\Contract\IServerUtil;

interface ISwooleServerUtil extends IServerUtil
{
    /**
     * 发送消息给 Worker 进程，使用框架内置格式.
     *
     * 返回成功发送消息数量
     *
     * @param string         $action
     * @param array          $data
     * @param int|int[]|null $workerId
     *
     * @return int
     */
    public function sendMessage(string $action, array $data = [], $workerId = null): int;

    /**
     * 发送消息给 Worker 进程.
     *
     * 返回成功发送消息数量
     *
     * @param string         $message
     * @param int|int[]|null $workerId
     *
     * @return int
     */
    public function sendMessageRaw(string $message, $workerId = null): int;
}
