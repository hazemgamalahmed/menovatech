/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "../src/assets/js/pages/custom/user/list-datatable.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "../src/assets/js/pages/custom/user/list-datatable.js":
/*!************************************************************!*\
  !*** ../src/assets/js/pages/custom/user/list-datatable.js ***!
  \************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

// Class definition

var KTUserListDatatable = function() 
	{
	
	
		// variables
		var datatable;
	
	
		// init
		var init = function() 
{
    
    // init the datatables. Learn more: https://keenthemes.com/metronic/?page=docs&section=datatable
    datatable = $('#kt_apps_user_list_datatable').KTDatatable(
        {
            
            // datasource definition
            data: 
            {
                
                type: 'remote',
                source: 
                {
                    
                    read: {
                        url: route+'api/patients',
                        method: 'GET',
                        headers: {
                            'Authorization': "Bearer " + $('meta[name=csrf-token]').attr("content")
                        },
                        map: function(raw) {
                            // console.log(raw.success);
                            var dataSet = raw;
                            if (typeof raw.success !== 'undefined') {
                                dataSet = raw.success;
                            }
                            console.log(dataSet);
                            return dataSet;
                        }			
                    },
                    
                }
                ,
                pageSize: 10, // display 20 records per page
                serverPaging: true,
                serverFiltering: true,
                serverSorting: true,
                
            }
            ,
            
            // layout definition
            layout: 
            {
                
                scroll: false, // enable/disable datatable scroll both horizontal and vertical when needed.
                footer: false, // display/hide footer
                
            }
            ,
            
            // column sorting
            sortable: true,
            
            pagination: true,
            
            search: 
            {
                
                input: $('#generalSearch'),
                delay: 400,
                
            }
            ,
            
            // columns definition
            columns: [
                {
                    
                    field: 'id',
                    title: '#',
                    sortable: false,
                    width: 20,
                    selector: 
                    {
                        
                        class: 'kt-checkbox--solid'
                        
                    }
                    ,
                    textAlign: 'center',
                    
                }
                , 
                {
                    
                    field: "AgentName",
                    title: "User",
                    width: 200,
                    // callback function support for column rendering
                    template: function(data, i) 
                    {
                        
                        var number = 4 + i;
                        
                        while (number > 12) 
                        {
                            
                            number = number - 3;
                            
                            
                        }
                        
                        var user_img = '100_' + number + '.jpg';
                        
                        
                        var pos = KTUtil.getRandomInt(0, 5);
                        
                        var position = [
                            'Developer',
                            'Designer',
                            'CEO',
                            'Manager',
                            'Architect',
                            'Sales'
                        ];
                        
                        
                        var output = '';
                        
                        if (number > 5) 
                        {
                            
                            output = '<div class="kt-user-card-v2">\
                            <div class="kt-user-card-v2__pic">\
                            <img src="assets/media/users/' + user_img + '" alt="photo">\
                            </div>\
                            <div class="kt-user-card-v2__details">\
                            <a href="#" class="kt-user-card-v2__name">' + data.name + '</a>\
                            <span class="kt-user-card-v2__desc">' + position[pos] + '</span>\
                            </div>\
                            </div>';
                            
                            
                        }
                        else 
                        {
                            
                            var stateNo = KTUtil.getRandomInt(0, 6);
                            
                            var states = [
                                'success',
                                'brand',
                                'danger',
                                'success',
                                'warning',
                                'primary',
                                'info'
                            ];
                            
                            var state = states[stateNo];
                            
                            
                            output = '<div class="kt-user-card-v2">\
                            <div class="kt-user-card-v2__pic">\
                            <div class="kt-badge kt-badge--xl kt-badge--' + state + '">' + data.name.substring(0, 1) + '</div>\
                            </div>\
                            <div class="kt-user-card-v2__details">\
                            <a href="#" class="kt-user-card-v2__name">' + data.name + '</a>\
                            <span class="kt-user-card-v2__desc">' + position[pos] + '</span>\
                            </div>\
                            </div>';
                            
                            
                        }
                        
                        
                        return output;
                        
                        
                    }
                    
                    
                }
                , 
                {
                    
                    field: 'Country',
                    title: 'Country',
                    template: function(row) 
                    {
                        
                        return row.name + ' ' + row.name;
                        
                        
                    }
                    ,
                    
                }
                , 
                {
                    
                    field: 'ShipDate',
                    title: 'Ship Date',
                    type: 'date',
                    format: 'MM/DD/YYYY',
                    
                }
                , 
                {
                    
                    field: "ShipName",
                    title: "Company",
                    width: 'auto',
                    autoHide: false,
                    // callback function support for column rendering
                    template: function(data, i) 
                    {
                        
                        var number = i + 1;
                        
                        while (number > 5) 
                        {
                            
                            number = number - 3;
                            
                            
                        }
                        
                        var img = number + '.png';
                        
                        
                        var skills = [
                            'Angular, React',
                            'Vue, Kendo',
                            '.NET, Oracle, MySQL',
                            'Node, SASS, Webpack',
                            'MangoDB, Java',
                            'HTML5, jQuery, CSS3'
                        ];
                        
                        
                        var output = '\
                        <div class="kt-user-card-v2">\
                        <div class="kt-user-card-v2__pic">\
                        <img src="assets/media/client-logos/logo' + img + '" alt="photo">\
                        </div>\
                        <div class="kt-user-card-v2__details">\
                        <a href="#" class="kt-user-card-v2__name">' + data.name + '</a>\
                        <span class="kt-user-card-v2__email">' +
                        skills[number - 1] + '</span>\
                        </div>\
                        </div>';
                        
                        
                        return output;
                        
                        
                    }
                    
                    
                }
                , 
                {
                    
                    field: "Status",
                    title: "Status",
                    width: 100,
                    // callback function support for column rendering
                    template: function(row) 
                    {
                        
                        var status = 
                        {
                            
                            1: 
                            {
                                
                                'title': 'Pending',
                                'class': ' btn-label-brand'
                                
                            }
                            ,
                            2: 
                            {
                                
                                'title': 'Processing',
                                'class': ' btn-label-danger'
                                
                            }
                            ,
                            3: 
                            {
                                
                                'title': 'Success',
                                'class': ' btn-label-success'
                                
                            }
                            ,
                            4: 
                            {
                                
                                'title': 'Delivered',
                                'class': ' btn-label-success'
                                
                            }
                            ,
                            5: 
                            {
                                
                                'title': 'Canceled',
                                'class': ' btn-label-warning'
                                
                            }
                            ,
                            6: 
                            {
                                
                                'title': 'Done',
                                'class': ' btn-label-danger'
                                
                            }
                            ,
                            7: 
                            {
                                
                                'title': 'On Hold',
                                'class': ' btn-label-warning'
                                
                            }
                            
                            
                        };
                        
                        return '<span class="btn btn-bold btn-sm btn-font-sm ' + status[2].class + '">' + status[2].title + '</span>';
                        
                        
                    }
                    
                    
                }
                , 
                {
                    
                    width: 110,
                    field: 'Type',
                    title: 'Type',
                    autoHide: false,
                    // callback function support for column rendering
                    template: function(row) 
                    {
                        
                        var status = 
                        {
                            
                            1: 
                            {
                                'title': 'Online', 'state': 'danger'
                            }
                            ,
                            2: 
                            {
                                'title': 'Retail', 'state': 'primary'
                            }
                            ,
                            3: 
                            {
                                'title': 'Direct', 'state': 'success'
                            }
                            ,
                            
                        };
                        
                        return '<span class="kt-badge kt-badge--' + status[2].state + ' kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-' + status[2].state + '">' +
                        status[2].title + '</span>';
                        
                        
                    }
                    ,
                    
                }
                , 
                {
                    
                    field: "Actions",
                    width: 80,
                    title: "Actions",
                    sortable: false,
                    autoHide: false,
                    overflow: 'visible',
                    template: function() 
                    {
                        
                        return '\
                        <div class="dropdown">\
                        <a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">\
                        <i class="flaticon-more-1"></i>\
                        </a>\
                        <div class="dropdown-menu dropdown-menu-right">\
                        <ul class="kt-nav">\
                        <li class="kt-nav__item">\
                        <a href="#" class="kt-nav__link">\
                        <i class="kt-nav__link-icon flaticon2-expand"></i>\
                        <span class="kt-nav__link-text">View</span>\
                        </a>\
                        </li>\
                        <li class="kt-nav__item">\
                        <a href="#" class="kt-nav__link">\
                        <i class="kt-nav__link-icon flaticon2-contract"></i>\
                        <span class="kt-nav__link-text">Edit</span>\
                        </a>\
                        </li>\
                        <li class="kt-nav__item">\
                        <a href="#" class="kt-nav__link">\
                        <i class="kt-nav__link-icon flaticon2-trash"></i>\
                        <span class="kt-nav__link-text">Delete</span>\
                        </a>\
                        </li>\
                        <li class="kt-nav__item">\
                        <a href="#" class="kt-nav__link">\
                        <i class="kt-nav__link-icon flaticon2-mail-1"></i>\
                        <span class="kt-nav__link-text">Export</span>\
                        </a>\
                        </li>\
                        </ul>\
                        </div>\
                        </div>\
                        ';
                        
                        
                    }
                    ,
                    
                }
            ]
            
        }
        );
        
        
    }
	
	
		// search
		var search = function() 
		{
		
				$('#kt_form_status').on('change', function() 
			{
			
						datatable.search($(this).val().toLowerCase(), 'Status');
			
					
		}
		);
		
			
	}
	
	
		// selection
		var selection = function() 
		{
		
				// init form controls
				//$('#kt_form_status, #kt_form_type').selectpicker();
		
		
				// event handler on check and uncheck on records
				datatable.on('kt-datatable--on-check kt-datatable--on-uncheck kt-datatable--on-layout-updated',	function(e) 
			{
			
						var checkedNodes = datatable.rows('.kt-datatable__row--active').nodes();
			 // get selected records
						var count = checkedNodes.length;
			 // selected records count
			
						$('#kt_subheader_group_selected_rows').html(count);
			
							
						if (count > 0) 
				{
				
								$('#kt_subheader_search').addClass('kt-hidden');
				
								$('#kt_subheader_group_actions').removeClass('kt-hidden');
				
							
			}
			 else 
				{
				
								$('#kt_subheader_search').removeClass('kt-hidden');
				
								$('#kt_subheader_group_actions').addClass('kt-hidden');
				
							
			}
			
					
		}
		);
		
			
	}
	
	
		// fetch selected records
		var selectedFetch = function() 
		{
		
				// event handler on selected records fetch modal launch
				$('#kt_datatable_records_fetch_modal').on('show.bs.modal', function(e) 
			{
			
						// show loading dialog
			            var loading = new KTDialog(
				{
				'type': 'loader', 'placement': 'top center', 'message': 'Loading ...'
			}
			);
			
			            loading.show();
			
			
			            setTimeout(function() 
				{
				
				                loading.hide();
				
							
			}
			, 1000);
			
						
						// fetch selected IDs
						var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type="checkbox"]').map(function(i, chk) 
				{
				
								return $(chk).val();
				
							
			}
			);
			
			
						// populate selected IDs
						var c = document.createDocumentFragment();
			
							
						for (var i = 0;
			 i < ids.length;
			 i++) 
				{
				
								var li = document.createElement('li');
				
								li.setAttribute('data-id', ids[i]);
				
								li.innerHTML = 'Selected record ID: ' + ids[i];
				
								c.appendChild(li);
				
							
			}
			
			
						$(e.target).find('#kt_apps_user_fetch_records_selected').append(c);
			
					
		}
		).on('hide.bs.modal', function(e) 
			{
			
						$(e.target).find('#kt_apps_user_fetch_records_selected').empty();
			
					
		}
		);
		
			
	};
	
	
		// selected records status update
		var selectedStatusUpdate = function() 
		{
		
				$('#kt_subheader_group_actions_status_change').on('click', "[data-toggle='status-change']", function() 
			{
			
						var status = $(this).find(".kt-nav__link-text").html();
			
			
						// fetch selected IDs
						var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type="checkbox"]').map(function(i, chk) 
				{
				
								return $(chk).val();
				
							
			}
			);
			
			
						if (ids.length > 0) 
				{
				
								// learn more: https://sweetalert2.github.io/
								swal.fire(
					{
					
										buttonsStyling: false,
					
										html: "Are you sure to update " + ids.length + " selected records status to " + status + " ?",
										type: "info",
						
										confirmButtonText: "Yes, update!",
										confirmButtonClass: "btn btn-sm btn-bold btn-brand",
						
										showCancelButton: true,
										cancelButtonText: "No, cancel",
										cancelButtonClass: "btn btn-sm btn-bold btn-default"
									
				}
				).then(function(result) 
					{
					
										if (result.value) 
						{
						
												swal.fire(
							{
							
														title: 'Deleted!',
														text: 'Your selected records statuses have been updated!',
														type: 'success',
														buttonsStyling: false,
														confirmButtonText: "OK",
														confirmButtonClass: "btn btn-sm btn-bold btn-brand",
													
						}
						)
												// result.dismiss can be 'cancel', 'overlay',
												// 'close', and 'timer'
											
					}
					 else if (result.dismiss === 'cancel') 
						{
						
												swal.fire(
							{
							
														title: 'Cancelled',
														text: 'You selected records statuses have not been updated!',
														type: 'error',
														buttonsStyling: false,
														confirmButtonText: "OK",
														confirmButtonClass: "btn btn-sm btn-bold btn-brand",
													
						}
						);
						
											
					}
					
									
				}
				);
				
							
			}
			
					
		}
		);
		
			
	}
	
	
		// selected records delete
		var selectedDelete = function() 
		{
		
				$('#kt_subheader_group_actions_delete_all').on('click', function() 
			{
			
						// fetch selected IDs
						var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type="checkbox"]').map(function(i, chk) 
				{
				
								return $(chk).val();
				
							
			}
			);
			
			
						if (ids.length > 0) 
				{
				
								// learn more: https://sweetalert2.github.io/
								swal.fire(
					{
					
										buttonsStyling: false,
					
										text: "Are you sure to delete " + ids.length + " selected records ?",
										type: "danger",
					
										confirmButtonText: "Yes, delete!",
										confirmButtonClass: "btn btn-sm btn-bold btn-danger",
					
										showCancelButton: true,
										cancelButtonText: "No, cancel",
										cancelButtonClass: "btn btn-sm btn-bold btn-brand"
									
				}
				).then(function(result) 
					{
					
										if (result.value) 
						{
						
												swal.fire(
							{
							
														title: 'Deleted!',
														text: 'Your selected records have been deleted! :(',
														type: 'success',
														buttonsStyling: false,
														confirmButtonText: "OK",
														confirmButtonClass: "btn btn-sm btn-bold btn-brand",
													
						}
						)
												// result.dismiss can be 'cancel', 'overlay',
												// 'close', and 'timer'
											
					}
					 else if (result.dismiss === 'cancel') 
						{
						
												swal.fire(
							{
							
														title: 'Cancelled',
														text: 'You selected records have not been deleted! :)',
														type: 'error',
														buttonsStyling: false,
														confirmButtonText: "OK",
														confirmButtonClass: "btn btn-sm btn-bold btn-brand",
													
						}
						);
						
											
					}
					
									
				}
				);
				
							
			}
			
					
		}
		);
				
			
	}
	
	
		var updateTotal = function() 
		{
		
				datatable.on('kt-datatable--on-layout-updated', function () 
			{
			
						//$('#kt_subheader_total').html(datatable.getTotalRows() + ' Total');
			
					
		}
		);
		
			
	};
	
	
		return{
		
				// public functions
				init: function() 
			{
			
						init();
			
						search();
			
						selection();
			
						selectedFetch();
			
						selectedStatusUpdate();
			
						selectedDelete();
			
						updateTotal();
			
					
		}
		,
			
	};
	
}
();


// On document ready
KTUtil.ready(function() 
	{
	
		KTUserListDatatable.init();
	
}
);

//# sourceURL=webpack:///../src/assets/js/pages/custom/user/list-datatable.js?

/***/ })

/******/ });