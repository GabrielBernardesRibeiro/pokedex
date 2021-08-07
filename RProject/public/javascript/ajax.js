function get_pokemon() 
{
    let type_of_search = document.getElementById('search_type').value;
    let key_of_search = document.getElementById('search_input').value;
    let url_search = 'https://api.pokedex.aota.dev.br/api/'+type_of_search+'/'+key_of_search;
    jQuery.support.cors = true;
    $.ajax({
        url: url_search,
        method: 'GET',
        dataType: 'json',
        crossDomain: true
    }).done(pokemon => {
        if (pokemon.status === 'success') 
        {
            let search_result_field = document.getElementById('search_result');
            search_result_field.innerHTML = '';
            for (pokemon_single in pokemon.data)
            {
                create_single_box_pokemon(pokemon.data[pokemon_single]);
            } 
        } else 
        {
            create_box_error();
        }
    }).fail((error, textStatus) => {
        create_box_error();
    });
}

function create_single_box_pokemon(pokemon_single)
{
    let search_result_field = document.getElementById('search_result');

    let result_single_div = document.createElement("div");
    result_single_div.classList.add('result_single');
    search_result_field.appendChild(result_single_div);

    let pokemon_picture_div = document.createElement("div");
    pokemon_picture_div.classList.add('pokemon_picture');
    let pokemon_picture_img = document.createElement("img");
    pokemon_picture_img.src = pokemon_single.url;
    pokemon_picture_div.appendChild(pokemon_picture_img);
    result_single_div.appendChild(pokemon_picture_div);

    let name_div = document.createElement("div");
    name_div.classList.add('name');
    let name_p = document.createElement("p");
    name_p.innerHTML = pokemon_single.name;
    name_div.appendChild(name_p);
    result_single_div.appendChild(name_div);

    let type_pictures_div = document.createElement("div");
    type_pictures_div.classList.add('type_pictures');
    for(type in pokemon_single.types)
    {
        let type_single_div = document.createElement("div");
        type_single_div.classList.add('type_single');
        let type_single_img = document.createElement("img");
        type_single_img.src = pokemon_single.types[type].url;
        type_single_div.appendChild(type_single_img);
        type_pictures_div.appendChild(type_single_div);
    }
    result_single_div.appendChild(type_pictures_div);

    let abilities_div = document.createElement("div");
    abilities_div.classList.add('abilities');
    let index_of_ability = 1;
    for(ability in pokemon_single.abilities)
    {
        let ability_single_div = document.createElement("div");
        ability_single_div.classList.add('ability_single');
        let number_p = document.createElement("p");
        number_p.classList.add('number');
        if (pokemon_single.abilities[ability].hiden == 1)
        {
            number_p.innerHTML = 'Hd- ';
        } else 
        {
            number_p.innerHTML = index_of_ability+'°- ';
        }
        ability_single_div.appendChild(number_p);
        let ability_name_p = document.createElement("p");
        ability_name_p.classList.add('ability_name');
        ability_name_p.innerHTML = ' '+pokemon_single.abilities[ability].ability;
        ability_single_div.appendChild(ability_name_p);
        let clear_div = document.createElement("div");
        clear_div.classList.add('clear');
        ability_single_div.appendChild(clear_div);
        abilities_div.appendChild(ability_single_div);
        index_of_ability++;
    }
    result_single_div.appendChild(abilities_div);
}

function create_box_error()
{
    let search_result_field = document.getElementById('search_result');
    search_result_field.innerHTML = '';

    let error_return_div = document.createElement('div');
    let error_p = document.createElement('p');
    error_p.innerHTML = 'Ops, não tem nenhum Pokémon com essas características!';
    error_return_div.classList.add('error_return');
    error_return_div.appendChild(error_p);
    search_result_field.appendChild(error_return_div);
}