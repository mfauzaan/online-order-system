/**
 * Display a confirmation alert for delete buttons
 */
$('.delete-form').submit(function (e) {
  if (confirm("Are you sure you would like to conitnue this action?")) {
    return true;
  }

  return false;
});

$('.delete-onclick').click(function (e) {
  if (confirm("Are you sure you would like to conitnue this action?")) {
    return true;
  }

  return false;
});