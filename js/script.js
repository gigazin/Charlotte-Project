function showRegisterDiv() {
  document.getElementById('registerDiv').style.display = 'flex'
  document.getElementById('mainWrapperDiv').style.filter = 'blur(7px)'
  document.getElementById('mainWrapperDiv').style.pointerEvents = 'none'
}

function hideRegisterDiv() {
  document.getElementById('registerDiv').style.display = 'none'
  document.getElementById('mainWrapperDiv').style.filter = 'blur(0px)'
  document.getElementById('mainWrapperDiv').style.pointerEvents = 'auto'
}
