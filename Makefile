

include include.mk


ALL_TARGETS = index.html \
	download/index.html \
	users/index.html \
	users/mgp/index.html \
	developers/index.html \
	developers/mailarchive/index.html \
	about/index.html \
	img/go-oo-team.png

all: CHECK $(ALL_TARGETS)

img/go-oo-team.png: $(OOO_BUILD)/src/go-oo-team.png
	cp $< $@

about/index.html: $(OOO_BUILD)/src/easter/people.txt

CHECK:
	@test -d $(OOO_BUILD) || echo "WARNING: '$(OOO_BUILD)' is not a directory."
