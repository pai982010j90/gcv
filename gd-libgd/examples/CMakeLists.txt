include_directories (BEFORE "${GD_SOURCE_DIR}/src" "${CMAKE_BINARY_DIR}")

SET(TESTS_FILES
#  resize
#  ellipseaa
#  ellipse
  arc
#  ellipsearc
  crop
#  ellfullaa
  tgaread
  nnquant
  gif
)

if (JPEG_FOUND)
	SET(TESTS_FILES
		"${TESTS_FILES}"
		nnquant
		copyrotated
		flip
	)
endif (JPEG_FOUND)


if (TIFF_FOUND)
	SET(TESTS_FILES
		"${TESTS_FILES}"
		tiffread
	)
endif (TIFF_FOUND)

FOREACH(test_name ${TESTS_FILES})
	add_executable(${test_name} "${test_name}.c")
	target_link_libraries (${test_name} ${GD_LIB})
ENDFOREACH(test_name)

if (WIN32 AND NOT MINGW AND NOT MSYS)
	add_executable(windows WIN32 "windows.c")
	target_link_libraries (windows ${GD_LIB})
else (WIN32 AND NOT MINGW AND NOT MSYS)
	if (MINGW OR MSYS)
		add_executable(windows "windows.c")
		add_definitions("-mwindows")
		target_link_libraries(windows ${GD_LIB} stdc++ gdi32)
	endif (MINGW OR MSYS)
endif (WIN32 AND NOT MINGW AND NOT MSYS)
