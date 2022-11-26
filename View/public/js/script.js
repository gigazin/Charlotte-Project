const pageBlur = document.getElementById('pgBlur')
const deliveryRegModal = document.getElementById('delivery-reg-modal')
const coordRegModal = document.getElementById('coordinator-reg-modal')
const adminEditModal = document.getElementById('admin-edit-modal-wrapper')

function openDeliveryRegisterModal() {
  pageBlur.style.display = 'flex'
  deliveryRegModal.style.display = 'flex'
}

function closeDeliveryRegisterModal() {
  pageBlur.style.display = 'none'
  deliveryRegModal.style.display = 'none'
}

function openCoordinatorRegisterModal() {
  pageBlur.style.display = 'flex'
  coordRegModal.style.display = 'flex'
}

function closeCoordinatorRegisterModal() {
  pageBlur.style.display = 'none'
  coordRegModal.style.display = 'none'
}

function openAdminEditProfileModal() {
  pageBlur.style.display = 'flex'
  adminEditModal.style.display = 'flex'
}

function closeAdminEditProfileModal() {
  pageBlur.style.display = 'none'
  adminEditModal.style.display = 'none'
}
