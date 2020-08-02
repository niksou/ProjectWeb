$(document).ready(function () {
    $('#cart').click(function () {
        $('#popup').toggle();
    })
});

let guns = [
    {
        name: 'm-16',
        tag: 'msixteen',
        price: 22500,
        inCart: 0,
        id: 1
    },
    {
        name: 'mp5',
        tag: 'mpfive',
        price: 14400,
        inCart: 0,
        id: 2
    },
    {
        name: 'RPG',
        tag: 'rpg',
        price: 44900,
        inCart: 0,
        id: 3

    },
    {
        name: 'uzi',
        tag: 'uzi',
        price: 16500,
        inCart: 0,
        id: 4

    },
    {
        name: 'tavor',
        tag: 'tav',
        price: 34400,
        inCart: 0,
        id: 5

    },
    {
        name: 'ak-47',
        tag: 'akfourseven',
        price: 19900,
        inCart: 0,
        id: 6

    }
];

function updateCount(item, selectedItemData) {
    $(item).find('[name=amount]').val(parseInt($(item).find('[name=amount]').val()) + 1);
    $(item).find('[name=price]').val(parseInt($(item).find('[name=price]').val()) + selectedItemData.price);
    //$()
}

function createNewEntry(selectedItemData) {
    newItem = $('#cloneItem').clone();
    newItem.find('[name=amount]').val(1);
    newItem.find('[name=price]').val(selectedItemData.price);
    newItem.find('[name=name]').val(selectedItemData.name);
    newItem.attr('data-item-id',selectedItemData.id )
    newItem.toggle()
    newItem.removeAttr('id')
    $('#cart-list').append(newItem);
}

function updateSum(price) {
    window.alert(price);
   // document.getElementById("sum").innerText= price;
    $("sum").text(price);
 //  $('#sum').text(price)=$('#sum').text('#sum'+price);
}

function insertItemToCart(selectedItemData) {
    let item = $("#cart-list [data-item-id=" + selectedItemData.id + "] ");
    if (item.length > 0) {
        updateCount(item, selectedItemData)
    } else {
        createNewEntry(selectedItemData)
    }
    updateSum(selectedItemData.price)
}

function displayCart(id) {
    let selectedItemData = guns[id];
    insertItemToCart(selectedItemData);
}

