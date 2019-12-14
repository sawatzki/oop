<div class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <label for="">Vorname:</label>
                        <input type="text" id="edit-contact-firstName" class="form-control" value="Vorname" placeholder="Vorname">
                        <label for="">Nachname:</label>
                        <input type="text" id="edit-contact-lastName" class="form-control" value="Nachname"  placeholder="Nachname">
                        <label for="">Email:</label>
                        <input type="email" id="edit-contact-email" class="form-control" value="email@gamil.com"  placeholder="Email">
                        <label for="">Handy:</label>
                        <input type="text" id="edit-contact-mobile" class="form-control" value="+123 111 111111"  placeholder="Handy">
                        <label for="">Festnetz:</label>
                        <input type="text" id="edit-contact-tel" class="form-control" value="030 11111111"  placeholder="Festnetz">
                        <label for="">Straße. Nr.:</label>
                        <input type="text" id="edit-contact-address" class="form-control" value="Straße 1, 12345 Muster"  placeholder="Adresse">
                        <label for="">Info:</label>
                        <textarea name="" id="edit-contact-info" class="form-control" cols="5" rows="3"
                                  placeholder="Information">text text text 1</textarea>
                        <button id="contact-update" class="form-control btn btn-primary">Speichern</button>

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>