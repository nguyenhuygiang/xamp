<?php

$list_question = array(
    1 => array(
        'question' => 'HỌC TẠI TOPICA NATIVE BẠN SẼ THẤY KHÁC BIỆT GÌ VỚI PHƯƠNG PHÁP HỌC TRUYỀN THỐNG?',
        'answer' => array(
            'A' => 'Bạn sẽ được luyện nói thỏa thích 16h/ngày',
            'B' => 'Bạn được học tập với đội ngũ giáo viên Âu - Úc - Mỹ',
            'C' => 'Bạn được bắt đầu học ngay với lộ trình học tập riêng',
            'D' => 'Cả 3 đáp án trên đều đúng'
        ),
        'result' => 'D'
    ),
    2 => array(
        'question' => '1 ca học sẽ kéo dài trong vòng bao lâu  ',
        'answer' => array(
            'A' => '15 phút',
            'B' => '45 phút',
            'C' => '30 phút',
            'D' => '60 phút'
        ),
        'result' => 'B'
    ),
    3 => array(
        'question' => 'Giảng viên tại Topica Native là người nước nào?',
        'answer' => array(
            'A' => 'Âu, Úc, Mỹ',
            'B' => 'Việt Nam',
            'C' => 'Singapo',
            'D' => 'Ấn Độ'
        ),
        'result' => 'A'
    ),
    4 => array(
        'question' => 'Slogan của Topica Native là gì?',
        'answer' => array(
            'A' => 'Học thỏa thích cùng giáo viên bản ngữ',
            'B' => 'Học mọi lúc mọi nơi',
            'C' => 'Chương trình tiếng Anh dành cho người đi làm',
            'D' => 'Luyện nói Online thỏa thích'
        ),
        'result' => 'D'
    ),
    5 => array(
        'question' => 'Bạn nhận được những miễn phí gì tại Topica Native',
        'answer' => array(
            'A' => 'Học miễn phí',
            'B' => 'Thi lấy bằng miễn phí',
            'C' => 'Tư vấn miễn phí',
            'D' => 'Tư vấn miễn phí, kiểm tra đầu vào và xây dựng lộ trình học miễn phí'
        ),
        'result' => 'D'
    ),
);
session_start();
$data = $_POST;
if (!isset($data['number']) || !isset($data['answer']) || $data['number'] < 0 || $data['number'] > count($list_question)) {
    $data_return = array(
        'status' => -1,
        'msg' => '(Câu trả lời không hợp lệ)',
        'class' => 'color-red'
    );
    echo json_encode($data_return);
    return FALSE;
} else {
    $data_return = array();
    if ($data['answer'] != $list_question[$data['number']]['result']) {
        $data_return['status'] = 0;
        $data_return['class'] = 'color-red';
        $data_return['msg'] = '(Đáp án của bạn đã sai. Đáp án đúng là: "' . $list_question[$data['number']]['answer'][$list_question[$data['number']]['result']] . '")';
    } else {
        $data_return['status'] = 1;
        $data_return['class'] = 'text-success';
        $data_return['msg'] = '(Đáp án chính xác, vui lòng chuyển sang câu tiếp theo)';
    }
    if ($data['number'] == count($list_question)) {
        $data_return['next'] = FALSE;
    } else {
        $data_return['next'] = array(
            'number' => $data['number'] + 1,
            'question' => $list_question[$data['number'] + 1]['question'],
            'answer' => $list_question[$data['number'] + 1]['answer']
        );
    }
    echo json_encode($data_return);
    return FALSE;
}