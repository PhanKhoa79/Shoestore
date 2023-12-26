<?php
class Algorithm
{
    public function bubbleSort(array $array)
    {
        $n = count($array);

        for ($i = 0; $i < $n - 1; $i++) {
            for ($j = 0; $j < $n - $i - 1; $j++) {
                if ($array[$j] > $array[$j + 1]) {
                    // Hoán đổi vị trí nếu phần tử hiện tại lớn hơn phần tử kế bên
                    $temp = $array[$j];
                    $array[$j] = $array[$j + 1];
                    $array[$j + 1] = $temp;
                }
            }
        }

        return $array;
    }

    public function linearSearch(array $array, $searchValue)
    {
        $n = count($array);

        for ($i = 0; $i < $n; $i++) {
            if ($array[$i] === $searchValue) {
                return $i; // Trả về chỉ số nếu giá trị được tìm thấy
            }
        }

        return -1; // Trả về -1 nếu giá trị không tồn tại trong mảng
    }

    public function factorial($number)
    {
        if ($number === 0 || $number === 1) {
            return 1;
        } else {
            return $number * $this->factorial($number - 1);
        }
    }
}
?>