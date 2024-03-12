<?php

namespace App\Traits;

trait SortableTrait
{
    public function sortable()
    {
        // 요청으로부터 order_column 값을 가져오고, 기본값은 created_at
        $orderColumn = request('order_column', 'created_at');
        // orderColumn이 ['id', 'name', 'created_at'] 중 하나가 아닌 경우, 기본값은 created_at으로 설정
        if (!in_array($orderColumn, ['id', 'name', 'created_at'])) {
            $orderColumn = 'created_at';
        }

        // 요청으로부터 order_direction 값을 가져오고, 기본값은 desc
        $orderDirection = request('order_direction', 'desc');
        // orderDirection이 ['asc', 'desc'] 중 하나가 아닌 경우, 기본값은 desc로 설정
        if (!in_array($orderDirection, ['asc', 'desc'])) {
            $orderDirection = 'desc';
        }
        return [
            'orderColumn' => $orderColumn,
            'orderDirection' => $orderDirection
        ];
    }
}
