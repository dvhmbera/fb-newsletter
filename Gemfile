source 'https://rubygems.org'

gem 'rails', 						'4.2.5'
gem 'sass-rails', 			'~> 5.0'
gem 'uglifier', 				'>= 1.3.0'
gem 'coffee-rails', 		'~> 4.1.0'
gem 'jquery-rails'
gem 'turbolinks'
gem 'jbuilder',    			'~> 2.0'
gem 'sdoc',        			'~> 0.4.0', group: :doc
gem 'pg'

group :development, :test do
	gem 'byebug'
  gem 'spring',        	'1.1.3'
  gem 'web-console', 		'~> 2.0'
end

group :development do
  gem 'awesome_print', 	'~> 1.6.1'
	# Windows does not include zoneinfo files, so bundle the tzinfo-data gem
	gem 'tzinfo-data', platforms: [:mingw, :mswin, :x64_mingw, :jruby]
end

group :production do
	gem 'unicorn', 				'~> 4.9.0'
  gem 'rails_12factor', '0.0.2'
end