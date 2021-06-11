window.addEventListener ('load',() => {
    const params = (new URL(document.location)).searchParams ;
    const name = params.get('name');
    const email = params.get('email') ;

    document.getElementById('result-name').innerHTML = name ;
    document.getElementById('result-email').innerHTML = email ;


}
)
