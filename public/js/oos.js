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

/* File Upload Handler */
$('.custom-file-input').on('change', function() { 
  let fullPath = $(this).val(); 
  var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
  var filename = fullPath.substring(startIndex);
  if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
      filename = filename.substring(1);
  }

  $(this).next().text(filename);
});