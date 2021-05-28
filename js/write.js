const submitBtn = document.querySelector('.submit-btn')
const form = document.querySelector('.write-form')

submitBtn.addEventListener('click', () => {
  submitFunc()
})

function submitFunc() {
  const result = confirm('제출하시겠습니까?')
  if(result) {
    form.submit()
  } else {
    return
  }
}