<style>
.bt-azul{
    
    display: inline-block;
    cursor: pointer;
    position: relative;
    z-index: 1;
    outline: none !important;
    border: none;
    background: #144397;
    color: #fff !important;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    border-radius: 30px;
}

.bt-azul:hover{
    
    display: inline-block;
    cursor: pointer;
    position: relative;
    z-index: 1;
    outline: none !important;
    border: none;
    background: #32589b;
    color: #fff !important;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    border-radius: 30px;
    -webkit-animation: pulse 500ms;
    animation: pulse 500ms;

}
.button {
    border-radius: 4px;
    background-color: #f9fafb;
    border: none;
    color: #0668bd;
    text-align: center;
    font-size: 14px;
    padding: 9px;
    transition: all 0.5s;
    cursor: pointer;
    margin: 5px;
    border-radius: 25px;
    border-bottom: 4px solid #045ba8bf;
    border-top: 4px solid #045ba8bf;
  
}
.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

@mixin form-validation-state-selector($state) {
  @if ($state == "valid" or $state == "invalid") {
    .was-validated #{if(&, "&", "")}:#{$state},
    #{if(&, "&", "")}.is-#{$state} {
      @content;
    }
  } @else {
    #{if(&, "&", "")}.is-#{$state} {
      @content;
    }
  }
}

@mixin form-validation-state(
  $state,
  $color,
  $icon,
  $tooltip-color: color-contrast($color),
  $tooltip-bg-color: rgba($color, $form-feedback-tooltip-opacity),
  $focus-box-shadow: 0 0 $input-btn-focus-blur $input-focus-width rgba($color, $input-btn-focus-color-opacity)
) {
  .#{$state}-feedback {
    display: none;
    width: 100%;
    margin-top: $form-feedback-margin-top;
    @include font-size($form-feedback-font-size);
    font-style: $form-feedback-font-style;
    color: $color;
  }

  .#{$state}-tooltip {
    position: absolute;
    top: 100%;
    z-index: 5;
    display: none;
    max-width: 100%; // Contain to parent when possible
    padding: $form-feedback-tooltip-padding-y $form-feedback-tooltip-padding-x;
    margin-top: .1rem;
    @include font-size($form-feedback-tooltip-font-size);
    line-height: $form-feedback-tooltip-line-height;
    color: $tooltip-color;
    background-color: $tooltip-bg-color;
    @include border-radius($form-feedback-tooltip-border-radius);
  }

  @include form-validation-state-selector($state) {
    ~ .#{$state}-feedback,
    ~ .#{$state}-tooltip {
      display: block;
    }
  }

  .form-control {
    @include form-validation-state-selector($state) {
      border-color: $color;

      @if $enable-validation-icons {
        padding-right: $input-height-inner;
        background-image: escape-svg($icon);
        background-repeat: no-repeat;
        background-position: right $input-height-inner-quarter center;
        background-size: $input-height-inner-half $input-height-inner-half;
      }

      &:focus {
        border-color: $color;
        box-shadow: $focus-box-shadow;
      }
    }
  }

  // stylelint-disable-next-line selector-no-qualifying-type
  textarea.form-control {
    @include form-validation-state-selector($state) {
      @if $enable-validation-icons {
        padding-right: $input-height-inner;
        background-position: top $input-height-inner-quarter right $input-height-inner-quarter;
      }
    }
  }

  .form-select {
    @include form-validation-state-selector($state) {
      border-color: $color;

      @if $enable-validation-icons {
        &:not([multiple]):not([size]),
        &:not([multiple])[size="1"] {
          padding-right: $form-select-feedback-icon-padding-end;
          background-image: escape-svg($form-select-indicator), escape-svg($icon);
          background-position: $form-select-bg-position, $form-select-feedback-icon-position;
          background-size: $form-select-bg-size, $form-select-feedback-icon-size;
        }
      }

      &:focus {
        border-color: $color;
        box-shadow: $focus-box-shadow;
      }
    }
  }

  .form-check-input {
    @include form-validation-state-selector($state) {
      border-color: $color;

      &:checked {
        background-color: $color;
      }

      &:focus {
        box-shadow: $focus-box-shadow;
      }

      ~ .form-check-label {
        color: $color;
      }
    }
  }
  .form-check-inline .form-check-input {
    ~ .#{$state}-feedback {
      margin-left: .5em;
    }
  }

  .input-group .form-control,
  .input-group .form-select {
    @include form-validation-state-selector($state) {
      @if $state == "valid" {
        z-index: 1;
      } @else if $state == "invalid" {
        z-index: 2;
      }
      &:focus {
        z-index: 3;
      }
    }
  }
}
 


</style>

<section  id="fale-conosco" class="" style="padding:0px">
<div class="container aos-init aos-animate" style="margin-top:120px">
<div class="row">
    <div class="col-sm-5 col-md-6">

    <p class="lead" style="text-align: left;">
        Somos especializados em desenvolvimento de Sites Profissionais, Lojas Virtuais e 
        Marketplace para Microempreendedores Individuais, Microempresas, Empresas de Pequeno,
         Médio e Grande Porte.</p>

    <p class="o-7" style="text-align: justify;">
    No mercado desde 2009, a Mohatron Soluções em TI desenvolve ferramentas digitais modernas,
     dinâmicas e de alta tecnologia, sempre com foco em resultados.
      A experiência e expertise dos nossos profissionais é o grande diferencial nos 
      trabalhos que executamos, pois em um mercado competitivo, para a sua empresa 
      fazer bons negócios, é necessário que a estrutura online seja profissional.</p>

    
    <button class="button"><span>Fale com especialista</span></button>
  </div>

<div class="col-sm-5 col-md-6">


<form class="row g-3 needs-validation" novalidate>
  <div class="col-md-4 position-relative">
    <label for="validationTooltip01" class="form-label">First name</label>
    <input type="text" class="form-control" id="validationTooltip01" value="Mark" required>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltip02" class="form-label">Last name</label>
    <input type="text" class="form-control" id="validationTooltip02" value="Otto" required>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltipUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
      <input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
      <div class="invalid-tooltip">
        Please choose a unique and valid username.
      </div>
    </div>
  </div>
  <div class="col-md-6 position-relative">
    <label for="validationTooltip03" class="form-label">City</label>
    <input type="text" class="form-control" id="validationTooltip03" required>
    <div class="invalid-tooltip">
      Please provide a valid city.
    </div>
  </div>
  <div class="col-md-3 position-relative">
    <label for="validationTooltip04" class="form-label">State</label>
    <select class="form-select" id="validationTooltip04" required>
      <option selected disabled value="">Choose...</option>
      <option>...</option>
    </select>
    <div class="invalid-tooltip">
      Please select a valid state.
    </div>
  </div>
  <div class="col-md-3 position-relative">
    <label for="validationTooltip05" class="form-label">Zip</label>
    <input type="text" class="form-control" id="validationTooltip05" required>
    <div class="invalid-tooltip">
      Please provide a valid zip.
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>






</div>
   


        </div>
            </div>
                </div>
               
</section>




<script>
  $form-validation-states: (
  "valid": (
    "color": $form-feedback-valid-color,
    "icon": $form-feedback-icon-valid
  ),
  "invalid": (
    "color": $form-feedback-invalid-color,
    "icon": $form-feedback-icon-invalid
  )
);

@each $state, $data in $form-validation-states {
  @include form-validation-state($state, $data...);
}
</script>