<body>
    <h1>更新一間公司當天的資訊<h1>
    <form method="post" action="UpdateOneCom.php">
        公司：
        <input type="text" name="company"><br><br>
        日期：
        <input type="text" name="date">
        <h6>格式：yyyy-mm-dd</h6><br><br>
        開盤價：
        <input type="text" name="open"><br><br>
        最高價：
        <input type="text" name="high"><br><br>
        最低價：
        <input type="text" name="low"><br><br>
        關盤價：
        <input type="text" name="close"><br><br>
        adj close：
        <input type="text" name="adj_close"><br><br>
        Volume：
        <input type="text" name="volume"><br><br>
        <input type="submit" value="查詢" name="submit"><br><br>
    </form>
    <a href="index.php">離開</a>
</body>
