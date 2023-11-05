
//cài đặt nút togger xuất hiện
function styleSwitcherToggle(){
   const styleSwitcher = document.querySelector('.js-style-switcher'),
   styleSwitcherToggler = document.querySelector('.js-style-switcher-toggler');
   styleSwitcherToggler.addEventListener('click' , function(){
     styleSwitcher.classList.toggle('open');
     this.querySelector('i').classList.toggle('fa-times');
     this.querySelector('i').classList.toggle('fa-cog');
   });
}
styleSwitcherToggle();

//chuyển màu khi bấm vào các nút xanh đỏ
function themeColors() {
  const colorStyle = document.querySelector('.js-color-style');
  const themeColorsContainer = document.querySelector('.js-theme-colors');

  themeColorsContainer.addEventListener('click', ({ target }) => {
    if (target.classList.contains('js-theme-color-item')) {
      localStorage.setItem('color', target.getAttribute('data-js-theme-color'));
      setColor();
    }
  });

  function setColor() {
    let path = colorStyle.getAttribute('href').split("/");

    path = path.slice(0, path.length - 1);
    colorStyle.setAttribute("href", path.join("/") + "/" + localStorage.getItem("color") + ".css");

    if(document.querySelector('.js-theme-color-item.active')){
        document.querySelector('.js-theme-color-item.active').classList.remove('active');
    }
    document.querySelector('[data-js-theme-color=' + localStorage.getItem('color') + ']').classList.add('active');
  }

  if(localStorage.getItem('color') !== null){
      setColor();
  }
  else{
     const defaultColor = colorStyle.getAttribute('href').split('/').pop().split('.').shift();
     document.querySelector('[data-js-theme-color=' + defaultColor +']').classList.add('active');
  }
}

themeColors();




// theme light && theme dark
function themeLightDark(){
  const darkModeCheckbox = document.querySelector('.js-dark-mode');

  darkModeCheckbox.addEventListener('click' , function(){
     if(this.checked){
        localStorage.setItem('theme-dark', 'true');
     }
     else{
        localStorage.setItem('theme-dark', 'false');
     }
     themeMode();
  });
   
  function themeMode(){
    if(localStorage.getItem('theme-dark') === 'false'){
         document.body.classList.remove('t-dark');
    }else{
        document.body.classList.add('t-dark');
    }
  }
  if(localStorage.getItem('theme-dark') !== null){
    themeMode();
  }
  // if(document.body.classList.contains('t-dark')){
  //   darkModeCheckbox = true;
  // }
}
themeLightDark();

// theme glass effect
function themeGlassEffect() {
  const glassEffectCheckbox = document.querySelector('.js-glass-effect');  // nút
  const glassStyle = document.querySelector('.js-glass-style'); // glass.css


  // kiểm tra nút -> xác dịnh glass-effect
  glassEffectCheckbox.addEventListener('click', function() {
    if (this.checked) {
      localStorage.setItem('glass-effect', true);
    } else {
      localStorage.setItem('glass-effect', false);
    }
    glass();
  });


    // kiểm tra glass-effect -> xoá thuộc tính disabled
  function glass() {
    if (localStorage.getItem('glass-effect') === 'true') {
      glassStyle.removeAttribute('disabled');
    } else {
      glassStyle.disabled = true;
    }
  }

  if (localStorage.getItem('glass-effect') !== null) {
    glass();
  }
  // không disabled-> tự động true
  if (!glassStyle.hasAttribute('disabled')) {
    glassEffectCheckbox.checked = true;
  }
}

themeGlassEffect();
