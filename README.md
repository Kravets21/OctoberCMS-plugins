# OctoberCMS plugins
Автор - новая роль в BackendUser, которую нужно создать c именем "Author". Сделать это можно в настройках OcotoberCMS: administrators/manage roles/new role.
Плагин расширяет юзера и добавляет новую форму при выборе роли "Автор" с полями nickname и about.

Компоненты: AuthorsList и AuthorProfile
# *AuthorsList - выводит список всех авторов
# *AuthorProfile - выводит всю информацию про автора и все его посты

# [AuthorsList]
==

{% partial 'authors-list' 
authors = AuthorsList.getAuthorsList
%}

Когда показываем список авторов нужно передать в слаге никнейм автора <a href="{{ 'author-profile'|page({ slug:author.author.nickname }) }}"
У автора также есть поля: author.author.nickname, author.author.about(если нужно)

# [AuthorProfile]
nickname = "{{ :slug }}"
==

{% partial 'author-info' 
posts = AuthorProfile.getPostsList 
author = AuthorProfile.getAuthor
%}

Поля автора: {{ author.nickname }}, {{ author.about }}
Поля постов стандартные из Octobercms: {{ post.title }}, ... итд 
