<?php
  if ( is_singular() ) wp_enqueue_script( "comment-reply" );
      $aria_req = ( $req ? " aria-required='true'" : '' );
      $comment_args = array(
            'id_form' => 'comment-form',    
              'class_form' => 'comment-form',
              'title_reply'=> esc_html__( 'Laisser un commentaire'),
              'comment_field' => '<p class="comment-form-comment">
                                    <label>Commentaire</label>
                                    <textarea name="comment" id="comment" cols="45" rows="5" maxlength="65525" required="required" data-error="Vous devez laisser un commenatire."></textarea>
                                 </p>',
                                                        
              'fields' => apply_filters( 'comment_form_default_fields', array(
                  'author' =>   '<p class="comment-form-author">
                                        <label>Nom <span class="required">*</span></label>
                                          <input type="text" name="author" id="author" placeholder="'.esc_attr__('Votre nom....').' " required="required" data-error="Nom est requis.">
                                      </p>',
                  'email' =>    '<p class="comment-form-email">
                                        <label>E-mail <span class="required">*</span></label>
                                          <input type="email" id="email" name="email" placeholder="'.esc_attr__('Votre e-mail....').'" required="required" data-error="E-mail est requis.">
                                      </p>',
              ) ),   
            'submit_button' => '<p class="form-submit">
                                    <input type="submit" name="submit" id="submit" class="submit" value="Laisser un commentaire">
                              </p>',               
               'comment_notes_before' => '',
               'comment_notes_after' => '',               
      )
?>

<?php if ( comments_open() ) : ?>
<?php comment_form($comment_args); ?>
<?php endif; ?> 