/* ========================================================================
 * Touchcast: pnstooltip.js v1.0.0
 * http://touchcast.co.nz/
 * Created as a reusable means for tooltip icon directives
 * ========================================================================
 * Copyright 2015 Touchcast.
 * ======================================================================== */

(function($){

    var methods = {

        init : function(options){
			
			options = options || {};

            return this.each(function(){
				
				if(!$(this).prop('id')){
					// gets a unique id that is not on the page already
				
					var idHash = options.idHash || 'pnstooltip-id-';
					var idInt = 0;
					while($('#'+idHash+idInt).get().length > 0){
						idInt++;
					}

					$(this).prop('id', idHash+idInt);

				}
				
				
				var offIconUrl = options.offIconUrl || '/images/icons/PnS_info.svg';
				var onIconUrl = options.onIconUrl || '/images/icons/PnS_info_rollover.svg';
				
				var offIconClass = options.offIconClass || 'icon grey inject-me';
				var onIconClass = options.onIconClass || 'noshow inject-me';
				
				
				
				
				
				var idPrefix = $(this).prop('id');
				
                var holder = {
					origEl : null,
                    parentNode : null,
                    newEl : null,
					offIcon : null,
					onIcon : null,
					content : options.content || $(options.contentSelector || '.pnstooltip-content', this)
                };

                holder.origEl = this;
                holder.parentNode = holder.origEl.parentNode;
                holder.offIcon = $('<img class="pnstooltip-icon '+offIconClass+'" src="'+offIconUrl+'" />').prop('id', idPrefix+'-off-icon');
				holder.onIcon = $('<img class="pnstooltip-icon '+onIconClass+'" src="'+onIconUrl+'" />').prop('id', idPrefix+'-on-icon');
				
				if(typeof holder.content === 'object'){
					holder.content.hide();
				}
				
//				$(options.contentSelector).hide();
				
				
				$(holder.origEl).append(holder.offIcon);
				$(holder.origEl).append(holder.onIcon);
				
				$(holder.offIcon).css('display', 'inline-block');
				
				$(holder.origEl).qtip({
					content: { 
						text: holder.content,
						button: 'Close'
					},
					style: { 
						classes: options.styleClass || 'pnstooltipbox' 
					},
					position: {
						my: options.positionMy || 'bottom left',
						at: options.positionAt || 'top right', 
						target: options.target || holder.origEl
					},
					events : {
						show : function(){
							holder.offIcon.css('display', 'none');
							holder.onIcon.css('display', 'inline');

						},
						hide : function(){

							holder.offIcon.css('display', 'inline');
							holder.onIcon.css('display', 'none');

						}
					}

				});
				
				if(options.trigger){
					$(options.trigger.show.selector).bind(options.trigger.show.event, function(e){
						e.preventDefault();
						e.stopPropagation();
						$(holder.origEl).qtip('show');
					});
					$(options.trigger.hide.selector).bind(options.trigger.hide.event, function(e){
						e.preventDefault();
						e.stopPropagation();
						$(holder.origEl).qtip('hide');
					});
				}
				

			});

        }

    };



$.fn.pnstooltip = function(method){
    // Method calling logic
    if ( methods[method] ) {
      return methods[ method ].apply( this, Array.prototype.slice.call( arguments, 1 ));
    } else if ( typeof method === 'object' || ! method ) {
      return methods.init.apply( this, arguments );
    } else {
      $.error( 'Method ' +  method + ' does not exist on jQuery.pnstooltip' );
    }


}

})(jQuery);






