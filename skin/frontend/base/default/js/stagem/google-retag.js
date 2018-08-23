var targets = Stagem.GoogleRetag.targets;
targets.forEach(function (target) {
  console.log('target', target);
  var fullActions = target['full_action_name'].split(',');
  console.log('fullActions', fullActions);

  fullActions.forEach(function (action) {
    if (('*' === action) || (action === Stagem.GoogleRetag.fullActionName)) {
      return;
    }
    jQuery(target['selector']).on(target['event'], function () {
      var elm = jQuery(this);
      var form = elm.closest('form');
      if (form.length && form.has('[class^=required-], [class^=validate-]')) {

      }
      eval(target['code']);
      console.log("Run target: " + target['code']);
    });
  });
});
