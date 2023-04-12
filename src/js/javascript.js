const about = $('.about')
const about_f = $('.about-full')
const coral_r = $('.coral-redirect')
const cust_r = $('.customer')
const modal = $('.modal')
const modal_close = $('.modal .close')
const modal_open = $('.modal-open')
const bet_now = $('.bet-now button')
const email_input = $('.email')
const email_validate = $('.email-validate')

modal_close.click(() => {
    modal.removeClass('open')
})

modal_open.click(() => {
    modal.addClass('open')
})

bet_now.click(()=> {
    const email = email_input.val()
    if(email)
        $.ajax({
            url: 'validator/email-validator.php',
            method: 'POST',
            data: {
                email
            }
        }).then(d => {
            const data = JSON.parse(d)
            if(data.error)
                email_validate.removeClass('red green').addClass('red').html(data.message)
            else
            {
                email_validate.removeClass('red green').addClass('green').html(data.message)
                window.location.href = `http://www.coral.co.uk/register?email=${email}`
            }
        })
})

about.click(() => {
    about.hasClass('open') ? about.removeClass('open') : about.addClass('open')
    about_f.hasClass('open') ? about_f.removeClass('open') : about_f.addClass('open')
})

coral_r.click(() => {
    window.location.href = 'http://www.coral.co.uk'
})

cust_r.click(() => {
    window.location.href = 'http://www.coral.co.uk?client=true'
})