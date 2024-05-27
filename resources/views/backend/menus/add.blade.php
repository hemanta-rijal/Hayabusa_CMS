@extends('backend.layouts.master')

@section('title', 'CTA Page')
@section('page-title-breadcrumb')
    @include('backend.layouts.page-title', [
        'title' => 'Menus',
        'breadcrumbs' => [
            'Dashboard' => route('dashboard'),
            'Menus' => '',
        ],
    ])
@endsection

@php
    $menu_id = isset($_GET['id']) ? $_GET['id'] : null;
@endphp

@section('content')
    <div class="row">
        <div class="col-md-4">
            @foreach ($menuOptions as $key => $menuOption)
                <div class="card {{ $menus->isEmpty() || $menu_id == null ? 'disabled' : '' }}">
                    <div class="card-header">
                        <h5 class="mb-0">
                            <button {{ $menus->isEmpty() ? 'disabled' : '' }} class="btn btn-link" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapse{{ $key }}"
                                aria-expanded="{{ $loop->first ? ($menus->count() == 0 ? 'false' : 'true') : 'false' }}"
                                aria-controls="collapse{{ $key }}">
                                {{ $key }}
                            </button>
                        </h5>
                    </div>
                    <div id="collapse{{ $key }}"
                        class="collapse {{ $loop->first ? ($menus->isEmpty() || $menu_id == null ? '' : 'show') : '' }}">
                        <div class="card-body">
                            <div class="scrollable-checkbox-list" style="max-height: 150px; overflow-y: auto;">
                                @foreach ($menuOption as $option)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="{{ 'select-' . $key }}[]"
                                            id="flexCheckDefault{{ $loop->index + 1 }}" value="{{ $option['slug'] }}"
                                            data-title-en={{ $option['title_en'] }}
                                            data-title-jp={{ $option['title_jp'] }}>
                                        <label class="form-check-label" for="flexCheckDefault{{ $loop->index + 1 }}">
                                            {{ $option['title_en'] }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-primary btn-sm float mt-3"
                                onClick="sendMenuDataToServer('{{ $key }}')"
                                {{ $menus->isEmpty() || $menu_id === null ? 'disabled' : '' }}>Add
                                to Menu</button>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">
                        <button {{ $menus->isEmpty() ? 'disabled' : '' }} class="btn btn-link" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapsecustommenu" aria-expanded="false"
                            aria-controls="collapsecustommenu">
                            Custom Menu
                        </button>
                    </h5>
                </div>
                <div id="collapsecustommenu" class="collapse">
                    <div class="card-body">
                        <div class="scrollable-checkbox-list" style="max-height: 150px; overflow-y: auto;">
                            <div class="form-group">
                                <label for="text1">Title (en)</label>
                                <input type="text" class="form-control" id="title_en" placeholder="Title in English">
                            </div>
                            <div class="form-group">
                                <label for="text2">Title (jp)</label>
                                <input type="text" class="form-control form-sm" id="title_jp" placeholder="Title in JP">
                            </div>
                            <div class="form-group">
                                <label for="text3">Link</label>
                                <input type="text" class="form-control" id="link" placeholder="Link">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary btn-sm float mt-3"
                            onClick="sendMenuDataToServer('custommenu')">Add to Menu</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="alert alert-primary" role="alert">
                @if (!$menus->isEmpty() || $menu_id === 'new')
                    Select a menu to edit:
                    <form action="{{ url('system/manage-menus') }}" class="form-inline" method="get">
                        <div class="row">
                            <div class="col-md-6">
                                <select id="course" class="form-select" autocomplete="off" name="id" required="">
                                    <option value="">Select a course</option>
                                    @foreach ($menus as $menu)
                                        @if ($desiredMenu != '')
                                            <option value="{{ $menu->id }}"
                                                @if ($menu->id == $desiredMenu->id) selected @endif>
                                                {{ $menu->title_en }}</option>
                                        @else
                                            <option value="{{ $menu->id }}">{{ $menu->title_en }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary btn-sm float mt-3">Select</button>
                            </div>
                        </div>


                    </form>
                    or <a href="{{ url('system/manage-menus?id=new') }}">Create a new menu</a>.
                @endif
            </div>
            @if ($menus->isEmpty())
                <form class="row" method="post" enctype='multipart/form-data' action="{{ url('system/create-menu') }}">
                    @csrf
                    @include('backend.menus.form')
                </form>
            @else
                <div class="col">
                    <h3>Draggable Nested List</h3>
                    <div id="sortable-list" class="list-group">
                        <div class="list-group-item" data-id="1">Item 1
                            <div class="nested-list"></div>
                        </div>
                        <div class="list-group-item" data-id="2">Item 2
                            <div class="nested-list"></div>
                        </div>
                        <div class="list-group-item" data-id="3">Item 3
                            <div class="nested-list"></div>
                        </div>
                        <div class="list-group-item" data-id="4">
                            Item 4
                            <div class="nested-list">
                                <div class="list-group-item" data-id="5">Subitem 1</div>
                                <div class="list-group-item" data-id="6">Subitem 2</div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection

@push('custom-js')
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.14.0/Sortable.min.js"></script>

    <script type="text/javascript">
        let key = <?php echo json_encode(array_keys($menuOptions)); ?>;
        console.log(key);

        function gatherMenuData(optionKey) {
            var checkedValues = gatherCheckedValues(optionKey);
            var customMenuData = gatherCustomMenuData();
            checkedValues.push(customMenuData);
            return checkedValues;
        }

        function gatherCheckedValues(optionKey) {
            var checkBoxes = document.getElementsByName('select-' + optionKey + '[]');
            var checkedValues = [];

            checkBoxes.forEach(function(checkbox) {
                if (checkbox.checked) {
                    var checkboxValue = checkbox.value;
                    var slug = (optionKey !== 'pages') ? `/${optionKey}/${checkboxValue}` : checkboxValue;
                    var titleEn = checkbox.dataset.titleEn;
                    var titleJp = checkbox.dataset.titleJp;
                    checkedValues.push({
                        slug: slug,
                        title_en: titleEn,
                        title_jp: titleJp
                    });
                }
            });

            return checkedValues;
        }

        function gatherCustomMenuData() {
            var titleEnInput = document.getElementById('title_en').value;
            var titleJpInput = document.getElementById('title_jp').value;
            var linkInput = document.getElementById('link').value;

            if (titleEnInput !== '' && linkInput !== '') {
                return {
                    slug: linkInput,
                    title_en: titleEnInput,
                    title_jp: titleJpInput
                };
            } else {
                return null;
            }
        }

        function sendMenuDataToServer(optionKey) {
            var data = gatherMenuData(optionKey);
            var menu_id = '<?php echo $menu_id; ?>'; // Get the menu ID from the query string

            // Get the CSRF token value from the meta tag in your HTML document
            var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            fetch('/system/menu-items', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken, // Include the CSRF token in the headers
                    },
                    body: JSON.stringify({
                        menu_id: menu_id,
                        menu_items: data
                    }), // Send menu_id and menu_items data
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    console.log('Server response:', data);
                    window.location.reload();
                })
                .catch(error => {
                    console.error('There was a problem with the fetch operation:', error);
                    // Handle error if needed
                });
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var sortable = new Sortable(document.getElementById('sortable-list'), {
                group: 'nested',
                animation: 150,
                draggable: '.list-group-item',
                onEnd: function(evt) {
                    var item = evt.item;
                    var itemId = item.getAttribute('data-id');
                    var parentItem = findClosestParentItem(item);
                    console.log(parentItem);
                    var closestListGroup = findClosestListGroup(item);

                    if (parentItem && parentItem !== item) {
                        // If the item has a parent and it's not being dropped onto itself
                        var nestedList = parentItem.querySelector('.nested-list');
                        if (nestedList) {
                            nestedList.appendChild(item); // Append the item to the new parent
                            console.log('Moved item ' + itemId + ' inside parent ' + parentItem.getAttribute('data-id'));
                        }
                    } else if (closestListGroup && !closestListGroup.contains(item)) {
                        // If the item is being dropped into the main list and not being dropped onto itself
                        closestListGroup.appendChild(item);
                        console.log('Moved item ' + itemId + ' to main list');
                    }
                }
            });

            // Initialize sortable for nested lists
            var nestedLists = document.querySelectorAll('.nested-list');
            nestedLists.forEach(function(nestedList) {
                new Sortable(nestedList, {
                    group: 'nested',
                    animation: 150,
                    draggable: '.list-group-item',
                    onEnd: function(evt) {
                        var item = evt.item;
                        var itemId = item.getAttribute('data-id');
                        var parentItem = findClosestParentItem(item);
                        var closestListGroup = findClosestListGroup(item);

                        if (parentItem && parentItem !== item) {
                            // If the item has a parent and it's not being dropped onto itself
                            var nestedList = parentItem.querySelector('.nested-list');
                            if (nestedList) {
                                nestedList.appendChild(item); // Append the item to the new parent
                                console.log('Moved item ' + itemId + ' inside parent ' + parentItem.getAttribute('data-id'));
                            }
                        } else if (closestListGroup && !closestListGroup.contains(item)) {
                            // If the item is being dropped into the main list and not being dropped onto itself
                            closestListGroup.appendChild(item);
                            console.log('Moved item ' + itemId + ' to main list');
                        }
                    }
                });
            });
        });

        function findClosestParentItem(item) {
            var parentItem = item.parentElement;
            while (parentItem) {
                if (parentItem.dataset && parentItem.dataset.id) {
                    return parentItem;
                }
                parentItem = parentItem.parentElement;
            }
            return null; // Return null if no parent with data-id attribute is found
        }

        function findClosestListGroup(item) {
            var closestParent = item.closest('.list-group-item');
            if (closestParent) {
                return closestParent.querySelector('.nested-list');
            } else {
                return document.getElementById('sortable-list');
            }
        }
    </script>
@endpush
