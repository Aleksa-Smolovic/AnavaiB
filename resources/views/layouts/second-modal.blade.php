<!-- Second Modal -->
<div class="modal" id="mySecondModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      @yield('second-modal-body')
      <div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Zatvori</button>
				<button type="submit" class="submitFormBtn btn btn-primary">Sačuvaj</button>
        <span style="display:none" class="dashboard-spinner spinner-xs formSpinner"></span>
      </div>
		</form>
      </div>
    </div>
  </div>