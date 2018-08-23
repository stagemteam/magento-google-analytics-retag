jQuery(document).ready(function () {
  var targets = Stagem.GoogleRetag.targets;
  jQuery.each(targets, function (i, target) {
    var fullActions = target['full_action_name'].split(',');
    jQuery.each(fullActions, function (i, action) {
      if (('*' === action) || (action === Stagem.GoogleRetag.fullActionName)) {
        jQuery(target['selector']).on(target['event'], function () {
          var elm = jQuery(this);
          var form = elm.closest('form');
          if (form.length) {
            // Find required empty text elements
            var emptyElms = form.find('input.required-entry:text').filter(function () {
              return jQuery(this).is(':visible') && this.value === '';
            });

            // Check if there are no empty elements and elements with failed validation
            if (emptyElms.length < 1 && form.find('.validation-failed, .mage-error').length < 1) {
              eval(target['code']);
              console.log("Run target for form: " + target['code']);
            }
          } else if (typeof elm.is('button') || elm.is('[type=submit]')) {
            if (!elm.hasClass('novalidate')) {
              eval(target['code']);
              console.log("Run target for button: " + target['code']);
            }

          } else {
            eval(target['code']);
            console.log("Run target: " + target['code']);
          }
        });
      }
    });
  });
});