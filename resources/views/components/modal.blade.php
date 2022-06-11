<div class="modal fade" id="calendarModal" tabindex="-1" role="dialog" aria-labelledby="calendarModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="calendarModalLabel">Запись на</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="modal-select">Врач</label>
                        </div>
                        <select class="custom-select" id="modal-select">

                        </select>
                    </div>
                    <div class="m-2">
                        <label for="message-text" class="form-label">Время</label>
                        <div>
                            <form>
                                {{ $slot }}
                            </form>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success">записаться</button>
            </div>
        </div>
    </div>
</div>
