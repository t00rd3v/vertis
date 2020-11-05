const service_fields_map = {
    'airtime' : {
        'network': {
            'input_type': 'select',
            'options': [
                {
                    'value': 'mtn',
                    'display_text': 'MTN'
                },
                {
                    'value': 'glo',
                    'display_text': 'GLO'
                },
                {
                    'value': 'airtel',
                    'display_text': 'AIRTEL'
                },

                {
                    'value': 'etisalat',
                    'display_text': 'ETISALAT'
                },

            ]
        },
        'phone_number': {
            'input_type': 'input',
            'placeholder': 'Provide Phone Number'
    }
    }
}

const service_layout = document.getElementById('service_layout');
const service_provider = document.getElementById('service_provider');

service_layout.addEventListener('change', function (event) {

    const service_type_fields = service_fields_map[event.target.value];
    for (let field in service_type_fields){

        if(service_type_fields[[field]].input_type){
            let element_to_render = document.createElement(service_type_fields[[field]].input_type)
            element_to_render.classList.add('form-control');

            if(service_type_fields[[field]].input_type === 'select'){

                let options = service_type_fields[[field]].options;

                let rendered_options = options.map(option => {
                    let optionElement = document.createElement('option');
                    optionElement.value = option.value;
                    optionElement.innerText = option.display_text;
                    return optionElement;
                })

                rendered_options.forEach(rendered_option => {
                    element_to_render.appendChild(rendered_option)
                })
                service_layout.appendChild(element_to_render);
            } else {
                let input_element = document.createElement(service_type_fields[[field]].input_type)
                input_element.classList.add('form-control')
                input_element.style.marginTop = '10px';
                input_element.placeholder = service_type_fields[[field]].placeholder
                service_layout.appendChild(input_element);
            }
        } else {
            return window.location.reload();
        }

    }

});
