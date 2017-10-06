<?php
// function get_acf_option($val){
//     if (!empty($_POST[$val])) {
//     return $name = htmlspecialchars($_POST[$val]);
//     return update_option($val, $name);
//   }
//   if (!get_option($val)) {
//       return add_option($val, '');
//   } else {
//       return $name = get_option($val);
//   }
// }
// $key = get_acf_option('acf_field_key');
// $name1 = get_acf_option('name1');
// $name2 = get_acf_option('name2');
// $name3 = get_acf_option('name3');
// $name4 = get_acf_option('name4');

  if (!empty($_POST['acf_field_key'])) {
      $key = htmlspecialchars($_POST['acf_field_key']);
      update_option('acf_field_key', $key);
  }
  if (!get_option('acf_field_key')) {
      add_option('acf_field_key', '');
  } else {
      $key = get_option('acf_field_key');
  }

  if (!empty($_POST['name1'])) {
      $name1 = htmlspecialchars($_POST['name1']);
      update_option('name1', $name1);
  }
  if (!get_option('name1')) {
      add_option('name1', '');
  } else {
      $name1 = get_option('name1');
  }

  if (!empty($_POST['name2'])) {
      $name2 = htmlspecialchars($_POST['name2']);
      update_option('name2', $name2);
  }
  if (!get_option('name2')) {
      add_option('name2', '');
  } else {
      $name2 = get_option('name2');
  }

  if (!empty($_POST['name3'])) {
      $name3 = htmlspecialchars($_POST['name3']);
      update_option('name3', $name3);
  }
  if (!get_option('name3')) {
      add_option('name3', '');
  } else {
      $name3 = get_option('name3');
  }

  if (!empty($_POST['name4'])) {
      $name4 = htmlspecialchars($_POST['name4']);
      update_option('name4', $name4);
  }
  if (!get_option('name4')) {
      add_option('name4', '');
  } else {
      $name4 = get_option('name4');
  }
?>
<div class="wrap">
  <h2>フィールドキー登録画面</h2>
  <form class="" action="" method="post">
    <div class="boxes">
    <strong>
      繰り返しフィールドのフィールドキーを登録します。
    </strong>
    </div>
    <p>
      <p>フィールドキー</p>
      <input type="text" name="acf_field_key" value="<?php if (isset($key)) {
    echo $key;
} ?>" />
  <p>フィールド名１</p>
  <input type="text" name="name1" value="<?php if (isset($name1)) {
    echo $name1;
} ?>" />
  <p>フィールド名２</p>
  <input type="text" name="name2" value="<?php if (isset($name2)) {
    echo $name2;
} ?>" />
  <p>フィールド名３</p>
  <input type="text" name="name3" value="<?php if (isset($name3)) {
    echo $name3;
} ?>" />
  <p>フィールド名４</p>
  <input type="text" name="name4" value="<?php if (isset($name4)) {
    echo $name4;
} ?>" /><br>
      <input type="submit" name="submit" class="button button-primary" value="変更を保存" />
    </p>
  </form>
