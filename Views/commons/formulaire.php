<!-- SECTION TITRE DU FORMULAIRE -->
<section class='section title-form is-medium has-background-dark'>
        <p class='is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-2-widescreen is-size-2-fullhd has-text-centered'>Un projet, <span class='color'>une idée ?</span><span class='contact'>Contactez-moi<i class='fas fa-envelope'></i></span>
        </p>
    <i class='arrow fas fa-chevron-circle-down'></i>
</section>  

<!-- SECTION FORMULAIRE -->
<section class='section form is-medium' id='ancre-form'>
    <?php if(isset($_SESSION['contact'])): ?>
        <div class='notification <?= $_SESSION['contact']['color-contact'] ?>'>
            <p><?= $_SESSION['contact']['msg-contact']; ?></p>
        </div>
    <?php endif;?>

    <form action='/grafiz/contact/send' method='POST' id='myForm' name='myForm'>
        <!-- ******* NOM ********** -->
        <div class='columns is-centered'>
            <div class='column'>
                <div class='field'>
                    <label class='label'>Nom</label>
                    <div class='control has-icons-left has-icons-right'>
                        <input class='input is-medium' name='nom' id='nom' type='text' placeholder=''>
                        <span class='icon is-small is-left'>
                            <i class='fas fa-user'></i>
                        </span>
                    </div>
                    <small class='nom help is-danger is-size-6 ml-2'></small>

                </div>
            </div>
            <!-- ******* Email ********** -->
            <div class='column'>
                <div class='field'>
                    <label class='label'>Email</label>
                    <div class='control has-icons-left has-icons-right'>
                        <input class='input is-medium' type='email' name='email' placeholder=''>
                        <span class='icon is-small is-left'>
                            <i class='fas fa-envelope'></i>
                        </span>
                    </div>
                    <small class='email help is-danger is-size-6'></small>
                </div>
            </div> 
        </div>
        <!-- ******* SUJET ********** -->
        <div class='columns'>
            <div class='column'>
                <div class='field'>
                    <!-- je veux rendre invisible le label car il y a un placeholder -->
                    <label class='label'>Sujet</label>
                    <div class='control sujet'>
                        <input class='input is-medium' name='sujet' id='sujet' type='text' placeholder="ex: création d'un logo">
                    </div>
                    <small class='sujet help is-danger is-size-6'></small>
                </div>
            </div>
        </div>
            <!-- ******* Message ********** -->
            <div class='columns is-centered'>
                <div class='column'>
                    <div class='field'>
                        <label class='label'>Message</label>
                        <div class='control has-icons-left'>
                            <textarea class='textarea' name='message' placeholder=''></textarea>
                        </div>
                        <small class='message help is-danger is-size-6 mt-2'></small>
                    </div>
                    <small class='general help is-danger is-size-6 mt-2'></small>
                </div>
            </div>
            <!-- ******* Submit ********** -->
            <div class='columns is-centered'>
                <div class='column'>
                    <div class='field'>
                        <div class='control'>
                            <input class='button is-primary' value='Envoyer le message' type='submit'>
                        </div>
                    </div>
                </div>
            </div>
    </form>
    </section>
    
    
    
    
    
    
    
    