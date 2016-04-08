<?php

class Node
{
  public static function getPost($id)
  {
    $data = static::getList();

    if (isset($data[$id])) {
      return $data[$id];
    }
  }

  public static function getList() 
  {
    $data = array(
      '1' => array(
        'title' => 'Gói 30.000 tỷ được hưởng lãi suất thấp cho đến khi giải ngân hết',
        'content' => 'Đây là một trong những nội dung được nêu tại Nghị quyết phiên họp thường kỳ tháng 3/2016 vừa mới được ban hành. Theo đó, Thủ tướng Nguyễn Tấn Dũng yêu cầu Ngân hàng Nhà nước tiếp tục triển khai gói tín dụng cho vay hỗ trợ nhà ở 30.000 tỷ đồng theo Nghị quyết số 02 với lãi suất ưu đãi 5% cho đến khi giải ngân hết thay vì kết thúc vào ngày 1/6/2016 như Thông tư 11/2013 của Ngân hàng Nhà nước quy định.

    Với quyết định trên của Chính phủ, những người mua nhà đã được ngân hàng cam kết cho vay trước ngày 31/3/2016 đều được giải ngân và hưởng lãi suất ưu đãi 5% trong suốt khoảng thời gian vay thay vì phải trả lãi suất thương mại sau ngày 1/6/2016.'
      ),
      '2' => array(
        'title' => 'VPBank lãi lớn nhờ cho vay tiêu dùng',
        'content' => 'Thông tin trên được ban điều hành Ngân hàng Việt Nam Thịnh Vượng (VPBank) đưa ra tại Đại hội cổ đông thường niên năm 2016 diễn ra ngày 28/3. Theo đó, năm ngoái ngân hàng báo lãi trước thuế hơn 3.000 tỷ đồng. Sau thuế, ngân hàng lãi ròng gần 1.600 tỷ. Trong đó, gần hai phần ba đến từ Công ty tài chính VPB FC (đơn vị sở hữu thương hiệu FE Credit). Năm 2015, VPB FC lãi sau thuế gần 960 tỷ đồng nhờ hoạt động cho vay tiêu dùng.'
      ),
      '3' => array(
        'title' => 'Quốc hội tiến hành miễn nhiệm Thủ tướng',
        'content' => 'Chủ tịch nước Trần Đại Quang mở đầu phiên làm việc của kỳ họp 11 Quốc hội khóa 13 lúc 8h sáng nay. Ông đọc Tờ trình miễn nhiệm Thủ tướng Nguyễn Tấn Dũng, người điều hành Chính phủ gần 10 năm qua.

    "Thời gian đảm nhiệm chức vụ Thủ tướng, ông Nguyễn Tấn Dũng luôn hoàn thành nhiệm vụ được giao. Nay do yêu cầu sắp xếp công tác nhân sự cấp cao của Đảng và Nhà nước sau Đại hội Đảng lần thứ 12, nhằm tạo sự đồng bộ trong việc kiện toàn bộ máy nhà nước và công tác cán bộ... Chủ tịch nước trình Quốc hội xem xét chấp thuận miễn nhiệm chức vụ Thủ tướng với ông Nguyễn Tấn Dũng", Tờ trình nêu.'
      ),
      '4' => array(
        'title' => 'Tuyển sinh đại học tại London, Anh quốc',
        'content' => 'Được thành lập năm 1894, City University London là một trong số ít trường đại học Anh quốc đạt "Royal Charter" (Hiến chương Hoàng gia). Trường nằm ở trung tâm London - một trong những thành phố sôi động thế giới, gần khu Tây sang trọng của London và trung tâm tài chính của Vương quốc Anh. 

    Với hơn 100 năm kinh nghiệm trong công cuộc đào tạo giáo dục bậc đại học, City University nổi tiếng với tỷ lệ cao sinh viên có việc làm ổn định sau khi tốt nghiệp. Trường luôn chuẩn bị kỹ cho việc định hướng ngành nghề, liên kết chặt chẽ với các tổ chức nghề nghiệp, đồng thời, tạo điều kiện để học viên được tiếp cận với những nghiên cứu mới, phục vụ tốt cho việc dạy và học. Nhiều sinh viên của Sunrise Vietnam sau khi tốt nghiệp City University đã xin được việc làm tại Anh.'
      ),
      '5' => array(
        'title' => 'Thêm dấu ngoặc vào bài toán lớp 7 sẽ tránh được phiền toái',
        'content' => 'Thưa ông Trần Phương, việc thêm dấu ngoặc như ông nói chỉ có tác dụng tránh gây hiểu nhầm chứ nó không làm thay đổi bản chất bài toán! Với tôi khi đọc bài toán tôi chẳng có chút đắn đo nào khi giải theo cách Phụ Huynh, chỉ thêm điều kiện X khác 0 thôi! Tôi đã chỉ ra việc thay 2X bằng 2*X là sai Logic và dấu chia trước 2X phải tác dụng lên toàn bộ 2X!'
      ),
      '6' => array(
        'title' => 'Suarez lập cú đúp, Barca ngược dòng đánh bại Atletico',
        'content' => 'Tiếp Atletico trong trận tứ kết lượt đi, Barca một lần nữa khiến CĐV lo lắng khi để đối thủ vượt lên dẫn trước từ phút 25. Phải chờ đến giữa hiệp hai, giới hâm mộ xứ Catalonia mới thở phào nhẹ nhõm sau màn ngược dòng chớp nhoáng. Sau màn trình diễn gây thất vọng tại El Clasico, Luis Suarez tỏa sáng trở lại bằng cú đúp dứt điểm một chạm, đồng thời đánh dấu sự hồi sinh của bộ ba MSN trong màu áo Barca.'
      ),
      '7' => array(
        'title' => 'Rooney nên lùi xuống chơi tiền vệ',
        'content' => '"Wayne có thể chơi nhiều vị trí khác nhau", Peter Schmeichel bảo vệ quan điểm cho Rooney đá lùi hẳn xuống dưới. "Nếu bạn hỏi Wayne, cậu ấy sẽ nói muốn chơi trong vai trò kiến tạo của một số 10. Còn tôi thì cho rằng cậu ấy có thể chơi hẳn ở vị trí tiền vệ, có thể hơi giống Paul Scholes ngày trước. Wayne có tầm nhìn, khả năng chuyền dài, tắc bóng, tranh cướp và phòng ngự. Vấn đề là cậu ấy cần thực sự muốn chơi ở vị trí đó".'
      ),
      '8' => array(
        'title' => 'Ngọc Trinh: Xin hiểu tôi trước khi ghét',
        'content' => 'Ở buổi ra mắt "Vòng eo 56" tối 4/4 ở TP HCM, nữ người mẫu khóc chia sẻ mong muốn lớn nhất của cô sau phim về đời mình là được mọi người hiểu cô nhiều hơn.
    Lương Mạnh Hải: Ngọc Trinh sợ nắng hơn sợ ma / Ngọc Trinh thân mật bên người tình màn ảnh'
      ),
      '9' => array(
        'title' => 'Những mốt quần jeans lên ngôi và thoái trào hè 2016',
        'content' => 'Đám cưới của người đẹp Khadija Uzhakhova - con gái tỷ phú Nga Said Gutseriev - cuối tuần qua thu hút nhiều chú ý. Ngoài số trang sức trị giá 5 triệu USD (hơn 111 tỷ đồng), phí trang điểm, làm tóc hơn 2.500 USD (hơn 55 triệu đồng), cô dâu khiến quan khách trầm trồ khi khoác lên mình bộ váy cưới giá hơn 25.000 USD (hơn 550 triệu đồng) của hãng Elie Saab. Bộ váy có phần đuôi dài bốn mét được làm từ vải ren cao cấp Chantilly được nhập từ Pháp và Bỉ, đính hoa lụa, ngọc trai, pha lê...'
      ),
    );
    
    return $data;
  }
}