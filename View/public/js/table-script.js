const pageBlur = document.getElementById('pgBlur')
const deleteModal = document.getElementById('delete-modal')

function openDeleteModal() {
  pageBlur.style.display = 'flex'
  deleteModal.style.display = 'flex'
}

function closeDeleteModal() {
  pageBlur.style.display = 'none'
  deleteModal.style.display = 'none'
}