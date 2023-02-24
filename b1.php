<!DOCTYPE html>
<html lang="en">
  <head>
      <!-- 
      Khai báo sử dụng bộ mã utf-8
      - Bộ mã utf-8 được sử dụng cho các font chữ sử dụng bảng mã UNICODE
      - Các font chữ tiếng việt thường dùng bảng mã UNICODE là: Times new roman, Arial, Tahoma, ...
      -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document Object Model</title>
  </head>
  <body>
    <center>
    <h1>TÌM HIỂU KĨ THUẬT DOM TRONG JAVASCRIPT <br>
        (DOM : Document Object Model )
    </h1>
    <!-- Khởi tạo biểu mẫu nhập liệu Form frmLoginInfo
    - Thẻ <form></form> là thẻ có thẻ đóng.
    - Mỗi form tạo ra, cần đặt thuộc tính name và id để dễ quản lý.
    - Mỗi form đều cần có thuộc tính method để quy định phương thức hoạt động của form. Thường là GET hay POST.
    - Mỗi form đều cần có thuộc tính action để xác định nơi sẽ xử lý dữ liệu của form gởi đi.
    -->
    <form name="frmLoginInfo" id="frmLoginInfo" method="post" action="#">
      <!-- Tạo table để canh chỉnh dòng cột cho ngay ngắn -->
      <table border="1" id="frmLoginInfoContainer">
        <tr>
          <td>
            <b>Số dòng:</b>
          </td>
          <td>
            <!-- Sử dụng thẻ <input /> để tạo ô nhập liệu 
            - Thẻ <input /> là thẻ không có thẻ đóng.
            - Mỗi ô nhập liệu được tạo ra, cần đặt thuộc tính name và id để dễ quản lý.
            -->
            <input type="number" name="txtSodong" id="txtSodong" />
          </td>
        </tr>
        <!-- Kết thúc dòng Tên đăng nhập -->
        <!-- Dòng Tel -->
        <tr>
          <td>
            <b>Số cột:</b>
          </td>
          <td>
            <!-- Sử dụng thẻ <input /> để tạo ô nhập liệu 
            - Thẻ <input /> là thẻ không có thẻ đóng.
            - Mỗi ô nhập liệu được tạo ra, cần đặt thuộc tính name và id để dễ quản lý.
            - Sử dụng thuộc tính type="tel"
            - Tel là địa chỉ của trang web. Sẽ có dạng http://tenmiencuaban.com hoặc https://tenmiencuaban.com
            -->
            <input type="number" name="txtSocot" id="txtSocot" />
          </td>
        </tr>
        <!-- Kết thúc dòng Tel -->
        <!-- Dòng nút bấm Gởi dữ liệu -->
        <tr>
          <td colspan="2" align="center">
            <!-- Sử dụng thẻ <input /> để tạo ô nhập liệu
- Thẻ <input /> là thẻ không có thẻ đóng.
            - Mỗi ô nhập liệu được tạo ra, cần đặt thuộc tính name và id để dễ quản lý.
            - Sử dụng thuộc tính type="submit"
- Sử dụng thuộc tính value để cài đặt nhãn cho nút bấm submit
            -->
            <input type="submit" name="btnSubmit" id="btnSubmit" value="Hiển thị" />
            <input type="submit" name="btnSubmit" id="btnSubmit" value="Xóa" />
          </td>
        </tr>
        <!-- Kết thúc dòng nút bấm gởi dữ liệu -->
      </table> <!-- Kết thúc #frmLoginInfoContainer -->
    </form> <!-- Kết thúc #frmLoginInfo -->
</center>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 1</title>
</head>
<style>
    .display-box {
        font-family: 'Orbitron', sans-serif;
        background-color: #dcdbe1;
        color: black;
        width: 380px;
        height: 100px;
        border: 2px solid black;
        border-collapse: collapse;
    }
    table{
        margin-left: auto;
        margin-right: auto;
        text-align: center;

    }
    h1{
        text-align: center;
    }
    input{
        width: auto;
    }
    .box-2{
        font-family: 'Orbitron', sans-serif;
        background: #3b759e;
        color: black;
        border: 2px solid rgb(17, 213, 27);
        border-collapse: collapse;
        width: 720px;
        height: 250px;
    }
</style>
<body>
    
    <tr>
        <h1>TÌM HIỂU KỸ THUẬT DOM TRONG JAVASCRIPT <br>
            (DOM : Document Object Model)</h1>
    </tr>
    <table class="display-box" border="1">
    <tr>
        <td>Số dòng</td>
        <td> <input type="text"></td><br>
    </tr>
    <tr>
        <td>Số cột</td>
        <td> <input type="text"></td>
    </tr>
        <td colspan="2">
            <input type="button" value="Hiển thị">
            <input type="button" value="Xóa">
        </td>
    </table>
    <br>
    <table class="box-2" border="1">
        <tr>
            <td>0 0</td>
            <td>0 1</td>
            <td>0 2</td>
            <td>0 3</td>
            <td>0 4</td>
        </tr>
        <tr>
            <td>1 0</td>
            <td>1 1</td>
            <td>1 2</td>
            <td>1 3</td>
            <td>1 4</td>
        </tr>
        <tr>
            <td>2 0</td>
            <td>2 1</td>
            <td>2 2</td>
            <td>2 3</td>
            <td>2 4</td>
        </tr>
        <tr>
            <td>3 0</td>
            <td>3 1</td>
            <td>3 2</td>
            <td>3 3</td>
            <td>3 4</td>
        </tr>
        <tr>
            <td>4 0</td>
            <td>4 1</td>
            <td>4 2</td>
            <td>4 3</td>
            <td>4 4</td>
        </tr>
        <tr>
            <td>5 0</td>
            <td>5 1</td>
            <td>5 2</td>
            <td>5 3</td>
            <td>5 4</td>
        </tr>
        <tr>
            <td>6 0</td>
            <td>6 1</td>
            <td>6 2</td>
            <td>6 3</td>
            <td>6 4</td>
        </tr>
        <tr>
            <td>7 0</td>
            <td>7 1</td>
            <td>7 2</td>
            <td>7 3</td>
            <td>7 4</td>
        </tr>
        <tr>
            <td>8 0</td>
            <td>8 1</td>
            <td>8 2</td>
            <td>8 3</td>
            <td>8 4</td>
        </tr>
        <tr>
            <td>9 0</td>
            <td>9 1</td>
            <td>9 2</td>
            <td>9 3</td>
            <td>9 4</td>
        </tr>
    </table>
</body>
</html>