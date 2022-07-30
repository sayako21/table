<!-- タイトル -->
<table class="table table-sm y_data_title m-0">
    <tr>
        <th class="col-1"><input type="checkbox"></th>
        <th class="col-3">タイトル</th>
        <th class="col-2">タイトル</th>
        <th class="col-2">タイトル</th>
        <th class="col-3">タイトル</th>
    </tr>
</table>
<!-- /タイトル -->
<!-- データ -->
<div class="y_scroll_box">
  <table class="y_data table-striped">
      <?php foreach($lists as $list):?>
      <tr>
          <td class="col-1"><input type="checkbox"></td>
          <td class="col-3"><?= $list?><?= $list?><?= $list?></td>
          <td class="col-2"><?= $list?><?= $list?></td>
          <td class="col-2">
            <select name="example">
              <option value="empty">選択する</option>
              <option value="1">都</option>
              <option value="2">道</option>
              <option value="3">府</option>
              <option value="4">県</option>
            </select>
            <i class="fa-solid fa-pen"></i>
          </td>
          <td class="col-3"><?= $list?><?= $list?><?= $list?></td>
      </tr>
      <?php endforeach;?>
  </table>
</div>